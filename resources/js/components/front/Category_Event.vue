<template>
    <!-- SLIDER SECTION -->
    
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="zmovo-slider-with-cat-inner">
                            <div class="row">
                                <!-- Left Category menu -->
                                <div class="col-lg-3">
                                    <h2 id="hidden-cat"><span>top 10 Category</span></h2>
                                    <div class="zmovo-category-menu" id="catmenu">
                                        <ul>


                                            <li class="active" v-for="(result, index) in categories" :key="result.id">
                                                <a @click="event(result.id)">{{ result.name }}</a>
                                                <!-- <a @clicl="">{{ result.name }}</a> -->
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                                <!-- End Left Gategory menu -->
                                <div class="col-lg-9" >
                                    <div class="row" id="table_bac_front">
                            
                                        <div class="col-md-12 mb-2" id="table_head_bac_front">
                                            <div class="row align-middle" >

                                                <div class="col-md-3" style="font-size:20px;">
                                                    <strong>Upcoming Event </strong>
                                                </div>
                                                <div class="col-md-3 float-left">
                                                    <select v-model="queryField" class="form-control" id="field">
                                                        <option value="id">Id</option>
                                                        <option value="title">Name</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        
                                            
                                        <div class="col-md-12" id="body_border">

                                            <div class="col-md-3 mt-3" style="float:left;height:240px;" v-for="(result, index) in events" :key="result.id">
                                                <div class="zmovo-v-box-img gradient" style="background:#080820;padding:10px;">
                                                    <img :src="'/uploads/event/'+result.image" style="height:70px;width:100%;" alt="">

                                                    <div >
                                                        <a href="" class="justify-content-center mt-2" style="color:white;">{{ result.title }}</a>
                                                        <div class="zmovo-v-tag c2">
                                                            <span>Romance, English, 2019</span>
                                                        </div>
                                                        <div class="movie-time">
                                                            <i class="fa fa-clock-o c1"></i><span>{{ result.rating }} star</span></div>
                                                        <div class="like-icon">
                                                            <a href=""><span class="fa fa-heart-o"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        

                                        <div class="col-md-12 mb-2 mt-3" id="table_head_bac_front">

                                            <nav aria-label="Page navigation example" >
                                              <ul class="pagination justify-content-center">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                              </ul>
                                            </nav>
                                        </div>
                                        
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END SLIDER SECTION -->
</template>

<script>
    export default {

        data () {
          return {
            id : this.$route.params.id,
            categories: [],
            events: [],
            queryField: 'title',

            
            // Create a new form instance
            form: new Form({
              id: '',
              name: '',
              status: '',
            })
          }
        },

        methods: {

            getData(){
                axios.get('/api/catename/category')
                .then(response => {
                    this.categories=response.data.data;
                })

                .catch(e => {
                    console.log(e);
                })
            },

            cate_output(){
                axios.get('/api/cate_output/'+this.id)
                .then(response => {
                    this.events=response.data.data;
                })

                .catch(e => {
                    console.log(e);
                })
            },

            event(id){
                axios.get('/api/cate_output/'+id)
                .then(response => {
                    this.events=response.data.data;
                })

                .catch(e => {
                    console.log(e);
                })
            },
        },


        mounted() {
            this.getData();
            this.cate_output();
            //setInterval(() => this.getData(), 3000)ekhan theke id ta bind kore niye geci app.js ete.
        }
    }      

</script>
