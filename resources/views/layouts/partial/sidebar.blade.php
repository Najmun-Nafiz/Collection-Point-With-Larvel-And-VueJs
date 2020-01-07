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

                                            <li class="active">
                                                <router-link to="/home">Home</router-link>
                                            </li>

                                            @foreach($data as $v_info)
                                            <li class="active">
                                                
                                                {{-- <router-link to="/cate_output">{{ $v_info -> name }}</router-link> --}}

                                                <router-link :to="'/cate_output/'+{{$v_info->id}}">{{ $v_info -> name }}</router-link>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
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