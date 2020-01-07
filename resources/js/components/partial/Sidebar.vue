<template>
    <!-- SLIDER SECTION -->
        <div class="zmovo-slider-with-cat">
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
                                                <router-link :to="'/cate_output/' + result.id">{{ result.name }}</router-link>

                                                <!-- <a id="tops" :to="'/cate_output/' + result.id">{{ result.name }}</a> -->
                                                <!-- <a @clicl="">{{ result.name }}</a> -->
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                                <!-- End Left Gategory menu -->
                                <!-- End Left Gategory menu -->
                                <div class="col-lg-9" >
                                    <router-view></router-view>
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

            categories: [],

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
        },


        mounted() {
            this.getData();
            //setInterval(() => this.getData(), 3000)ekhan theke id ta bind kore niye geci app.js ete.
        },
	}      

</script>
