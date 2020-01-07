@include('layouts.partial.header')

<!-- End breadcroumb-area -->
        <div class="zmovo-inner-page">
            <div class="zmovo-login-page">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-3 col-lg-5">
                            <div class="zmovo-page-login mt-50">
                                <form method="POST" action="{{ route('profile.update', $data -> id) }}" enctype="multipart/form-data">
                                    @csrf

                                    
                                    <div class="zmovo-login-input-top">
                                        
                                        <div class="form-group">
                                            <label>{{ __('Name') }}</label>
                                            <input class="form-control" required="" name="name" type="text" placeholder="Enter User Name" value="{{ $data -> name }}">
                                        </div>

                                        <div class="form-group">
                                            <label>{{ __('Email') }}</label>
                                            <input class="form-control" required="" name="email" type="text" placeholder="Enter your Email" value="{{  $data -> email }}">
                                        </div>

                                        

                                        <div class="form-group">
                                            <label>{{ __('Profile image') }}</label>
                                            <input class="form-control" required="" name="image" type="file" placeholder="Enter User Profile image" value="{{  $data -> image }}">
                                        </div>

                                       

                                    </div>

                                    <div class="zmovo-login-btns">
                                        <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}</button>

                                        <a href="{{ route('login') }}" class="btn btn-danger">Back</a>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('layouts.partial.footer')

