<template>


                                        <!-- SLIDER SECTION -->
                                        <div class="zmovo-slider-area slider3" >
                                            <div class="items" id="slider3" >

                                                <div class="item" v-for="(result, index) in sliders" :key="result.id">
                                                    <div class="zmovo-slider-contents">
                                                        <img :src="'/uploads/slider/'+result.image" alt="" style="height:491px;width:100%;">
                                                        <div class="zmovo-slide-content">
                                                            <div class="container">
                                                                <div class="zmovo-slider-contetn">
                                                                    <div class="zmovo-slider-premium-tag">
                                                                        <span class="c2-bg">premium</span>
                                                                        <label>Period Adventure</label>
                                                                    </div>
                                                                    <a href="">{{ result.title }}</a>
                                                                    <div class="zmovo-slide-cat">
                                                                        <ul>
                                                                            <li><span>Category : </span>{{ result.category.name}}</li>
                                                                            <li><span>Genreration : </span>{{ result.generation }} </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>




</template>
<script>
export default {
    data () {
          return {
            sliders: [],

        
            // Create a new form instance
            form: new Form({
              id: '',
              title: '',
              category_id: '',
              generation: '',
              image: '',
            })
          }
        },

    methods: {
        getData(){
            axios.get('/api/slider')
            .then(response => {
                this.sliders=response.data.data;
            })

            .catch(e => {
                console.log(e);
            })
        },
    },

    mounted() {
        this.getData()

    }


}
</script>