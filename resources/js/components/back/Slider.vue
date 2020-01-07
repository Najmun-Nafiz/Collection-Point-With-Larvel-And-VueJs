<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    
                    <div class="card-body">

                          <div class="card">

                            <div class="card-header">
                              
                              <div class="mb-3">
                            <div class="row" id="table_head_bac">
                                <div class="col-md-2" style="font-size:20px;">
                                    <strong>Search By : </strong>
                                </div>
                                <div class="col-md-3">
                                    <select v-model="queryField" class="form-control" id="field">
                                        <option value="name">Name</option>
                                        <option value="email">Email</option>
                                        <option value="type">Type</option>
                                        <option value="bio">Bio</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input v-model="query" type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </div>

                              
                            <div class="card-tools" id="add_info">
                                <button @click="add" type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">Add-New <i class="nav-icon fas fa-user-plus"></i></button>
                            </div>


                            </div>
							<!-- /.card-header -->

							<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
					        <div class="modal-dialog">
					          <div class="modal-content bg-success">

					            <div class="modal-header">
					              <h4 class="modal-title"  id="addModalLabel">Success Modal</h4>
					              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                <span aria-hidden="true">×</span></button>
					            </div>

								<form @submit.prevent="editMode ? update() : createUser()" @keydown="form.onKeydown($event)">
					            <div class="modal-body">

					                <div class="form-group mb-1">
					                    <label>Title</label>
					                    <input v-model="form.title" type="text" name="title"
					                      class="form-control" :class="{ 'is-invalid': form.errors.has('title') }" placeholder="Title">
					                    <has-error :form="form" field="title"></has-error>
					                </div>

					                <div class="form-group mb-1">
					                    <label>Gene</label>
					                    <input v-model="form.generation" type="text" name="generation"
					                      class="form-control" :class="{ 'is-invalid': form.errors.has('generation') }" placeholder="Generation">
					                    <has-error :form="form" field="generation"></has-error>
					                </div>


								    <div class="form-group mb-1">
					                    <label>Selecet Category</label>

					                    <select v-model="form.category_id" id="category_id" name="category_id"
					                      class="form-control" :class="{ 'is-invalid': form.errors.has('category_id') }" placeholder="Category_Id">

					                      	<option value="">Select One</option> 
					                      	<option v-for="(result, index) in categories" :key="result.id" :value="result.id">{{ result.name }}</option>

					                      </select>
					                      <span>Selected: {{ form.category_id }}</span>

					                    <has-error :form="form" field="category_id"></has-error>
					                </div>

					                <div class="form-group">
					                    <label>Banner Image</label>
					                    <input type="file" class="form-control" id="inputImage" name="image" @change="onChange" :class="{ 'is-invalid': form.errors.has('image') }" placeholder="Photo" required="1">

                                        <has-error :form="form" field="image"></has-error>

                                        <img :src="avatar" alt="" style="height:50px;weight:50px;border-radius:50%;">
					                </div>

					            </div>

					            <div class="modal-footer justify-content-between">
					              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
					              <button id="buttonText" type="submit" :disabled="form.busy" class="btn btn-warning">Save changes</button>
					            </div>

					        	</form>

					          </div>
					          <!-- /.modal-content -->
					        </div>
					        <!-- /.modal-dialog -->
					      </div>

                            <div class="card-body table-responsive p-0">
                              <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Generation</th>
                                    <th>Photo</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  <tr v-for="(result, index) in customers" :key="result.id">
                                    <td>{{ index+1 }}</td>
                                    <td>{{ result.title }}</td>
                                    <td>{{ result.category.name }}</td>
                                    <td>{{ result.generation }}</td>
                                    <td>
                                        <img :src="'/uploads/slider/'+result.image" alt="No image" style="height: 60px; width: 60px;border-radius:50%;">
                                    </td>

                                    <td>
                                        
                                        <span v-if="result.status == true" class="alert-success" style="color: black;">Active</span>
                                            
                                        <span v-else class="alert-danger" style="color: black;">Un-Active</span>
                                            
                                    </td>

                                    <td>

                                    	<a v-if="result.status == true" href="#"><button @click="unactive(result.id)" type="button" class="btn btn-secondary"><i class="fas fa-times-circle"></i></button></a>

                                        <a v-else href="#"><button @click="active(result.id)" type="button" class="btn btn-success"><i class="fas fa-check-circle"></i></button></a>

                                    	<a href="#"><button @click="edit(result)" type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button></a>

                                    	<a href="#"><button @click="destory(result)" type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></button></a>
                      					
                                    </td>
                                  </tr>
                                  
                                </tbody>
                              </table>
                            </div>
                            <!-- /.card-body -->

                            
                          </div>
                          <!-- /.card -->
                            <pagination-component v-if="pagination.last_page > 1" 
                                
                                :pagination="pagination"
                                :offset="5"
                                @paginate="query === '' ? getData() : searchData()"
                            ></pagination-component>


							
							<div class="modal fade show" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
							    <div class="modal-dialog">
							      <div class="modal-content bg-danger">

							        <div class="modal-header">
							          <h4 class="modal-title" id="deleteModalLabel">Danger Modal</h4>
							          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							            <span aria-hidden="true">×</span>
							          </button>
							        </div>

									<form @submit.prevent="destory_info()" @keydown="form.onKeydown($event)">
							        <div class="modal-body">
							          <h5 class="card-title">Are you sure ?</h5>
							        </div>

							        <div class="modal-footer justify-content-between">
							          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
							           <button :disabled="form.busy" type="submit" class="btn btn-primary">Yes</button>
							        </div>
									</form>

							      </div>
							          <!-- /.modal-content -->
							    </div>
							        <!-- /.modal-dialog -->
							  </div>
							
                        
                    </div>

                    <vue-snotify></vue-snotify>

            </div>

        </div>
    </div>

</template>

<script>
    export default {

    	data () {
    	  return {
            avatar: '',
    	  	editMode: false,
    	  	customers: [],
    	  	categories: [],

            query: '',
            queryField: 'name',
    	  	pagination:{
    			current_page: 1,
    		},

    	    // Create a new form instance
    	    form: new Form({
    	      id: '',
    	      category_id: '',
    	      title: '',
    	      generation: '',
    	      image: '',
              status: '',
    	    })
    	  }
    	},

        watch: {
            query:function(newQ, old){
                if(newQ === ''){
                    this.getData();
                }
                else{
                    this.searchData()
                }
            }
        },

    	methods: {

    		getData(){
                axios.get('/api/slider?page='+this.pagination.current_page)
                .then(response => {
                    console.log(response);
                    this.customers=response.data.data;
                    this.pagination=response.data;
                })

                .catch(e => {
                    console.log(e);
                })
            },

    		dataCategory(){
    			axios.get('/api/catename/category')
        		.then(response => {
        			this.categories=response.data.data;
        		})

        		.catch(e => {
        			console.log(e);
        		})
    		},

            searchData(){
                axios.get('/api/search/slider/'+this.queryField+'/'+this.query+'?page='+this.pagination.current_page)

                .then(response => {
                    this.customers=response.data.data;
                    this.pagination=response.data;
                })

                .catch(e => {
                    console.log(e)
                })
            },

    		add(){

    			this.editMode = false;

    			$('#addModalLabel').text('Add Customer Info..');
    			$('#buttonText').text('Insert-Info');
                $('#inputImage').text(null);
    			this.avatar = '';
                this.form.reset();
        		this.form.clear();
    		},

           onChange(e){
                let image = e.target.files[0];
                let reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = (e) => {
                    this.avatar = e.target.result
                    this.form.image = e.target.result
                }
            },



    		createUser(){
    			this.form.busy = true;
        		this.form.post('/api/slider/',{image: this.avatar})
        		.then(response => {
        			this.getData()
        			$('#addModal').modal('hide');

        			if(this.form.successful){
        				this.$snotify.success('Data Successfully Reloaded...')
        			}
        			else{
        				this.$snotify.error('Something is errror..!')
        			}
        		})

        		.catch(e => {
        			console.log(e)
        		})
                
    		},

    		edit(result){
    			this.editMode = true;
    			this.form.reset();
        		this.form.clear();
        		this.form.fill(result)
                this.avatar = "/uploads/slider/" + this.form.image;
        		$('#addModal').modal('show');
        		$('#buttonText').text('Update');
        		$('#addModalLabel').text('Update Customer Info..');
    		},

    		update(){
        		this.form.busy = true;
        		this.form.put('/api/slider/'+this.form.id)

        		.then(response => {
        			this.getData()
        			$('#addModal').modal('hide');

        			if(this.form.successful){
        				this.$snotify.success('Data Updated Successfully...')
        			}
        			else{
        				this.$snotify.error('Something is errror..!')
        			}
        		})

        		.catch(e => {
        			console.log(e)
        		})
        	},

        	active(id){

        		axios.get('/api/slider/active/'+id)
                .then(response => {
                    this.getData()
                    this.$snotify.success('Slider Activated..')
                })

                .catch(e => {
                    console.log(e)
                })
            },

            unactive(id){
                
        		axios.get('/api/slider/unactive/'+id)
                .then(response => {
                    this.getData()
                    this.$snotify.error('Slider Un-Activated..')
                })

                .catch(e => {
                    console.log(e)
                })
            }, 

    		destory(result){
    			this.form.reset();
        		this.form.clear();
        		this.form.fill(result)
        		$('#deleteModal').modal('show');
        		$('#deleteModalLabel').text('Delete Customer Info..');
    		},

    		destory_info(){
    			this.form.delete('/api/slider/'+this.form.id)

        		.then(response => {
        			this.getData()
        			$('#deleteModal').modal('hide');

        			if(this.form.successful){
        				this.$snotify.success('User Info Deleted Successfully Reloaded...')
        			}
        			else{
        				this.$snotify.error('Something is errror..!')
        			}
        		})

        		.catch(e => {
        			console.log(e)
        		})
    		}


    			
    	},

        mounted() {
            this.getData()
            this.dataCategory()
            // setInterval(() => this.getData(), 3000)
        }
    }
</script>
