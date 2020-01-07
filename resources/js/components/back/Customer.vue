<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    
                    <div class="card-body">

                          <div class="card">

                            <div class="card-header">
                              
                              <div class="mb-3" >
                                <div class="row" id="table_head_bac">

                                    <div class="col-md-2" style="font-size:20px;">
                                        <strong>Search By : </strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select v-model="queryField" class="form-control" id="field">
                                            <option value="name">Name</option>
                                            <option value="email">Email</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input v-model="query" type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                            </div>

                            </div>
                            <!-- /.card-header -->



                            <div class="card-body table-responsive p-0">
                              <table class="table table-hover">
                                <thead>
                                  <tr class="bg-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Emal</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  <tr v-for="(result, index) in customers" :key="result.id">
                                    <td>{{ index+1 }}</td>
                                    <td>{{ result.name }}</td>
                                    <td>{{ result.email }}</td>

                                    <td>
                                        <img :src="'/uploads/users/'+result.image" alt="No image" style="height: 60px; width: 60px;border-radius:50%;">
                                    </td>

                                    <td>

                                        <a href="#"><button type="button" class="btn btn-secondary"><i class="nav-icon fas fa-eye"></i></button></a>


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
            customers: [],

            query: '',
            queryField: 'name',
            pagination:{
                current_page: 1,
            },

            // Create a new form instance
            form: new Form({
              id: '',
              name: '',
              email: '',
              image: '',
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
                axios.get('/api/visitor?page='+this.pagination.current_page)
                .then(response => {
                    this.customers=response.data.data;
                    this.pagination=response.data.meta;
                })

                .catch(e => {
                    console.log(e);
                })
            },

            searchData(){
                axios.get('/api/search/visitor/'+this.queryField+'/'+this.query+'?page='+this.pagination.current_page)

                .then(response => {
                    this.customers=response.data.data;
                    this.pagination=response.data.meta;
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
                this.form.delete('/api/visitor/'+this.form.id)

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
            setInterval(() => this.getData(), 3000)
        }
    }
</script>
