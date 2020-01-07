@include('layouts.partial.header')

<!-- End breadcroumb-area -->
        <div class="zmovo-inner-page">
            <div class="zmovo-login-page">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-3 col-lg-5">
                            <div class="zmovo-page-login mt-50">
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="zmovo-login-input-top">
                                        
                                        <div class="form-group">
                                            <label>{{ __('Name') }}</label>
                                            <input class="form-control" required="" name="name" type="text" placeholder="Enter User Name">
                                        </div>

                                        <div class="form-group">
                                            <label>{{ __('Email') }}</label>
                                            <input class="form-control" required="" name="email" type="text" placeholder="Enter your Email">
                                        </div>

                                        <div class="form-group">
                                            <label>{{ __('Password') }}</label>
                                            <input class="form-control" required="" name="password" type="password" placeholder="Enter your Password">
                                        </div>

                                        <div class="form-group">
                                            <label>{{ __('Conform Password') }}</label>
                                            <input class="form-control" required="" name="password_confirmation" type="password" placeholder="Enter Conform Password">
                                        </div>

                                    </div>

                                    <div class="zmovo-login-btns">
                                        <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}</button>

                                        <a href="{{ route('login') }}" class="btn btn-danger">Back</a>
                                        
                                        <div class="zmovo-forgate-me">
                                            <a href="{{ route('password.request') }}">Forgat you <span>Password ?</span></a>
                                        </div>
                                    </div>

                                    <div class="zmovo-login-fb">
                                        <span>or</span>
                                        <ul>
                                            <li class="log-fb"><a href=""><span class="fa fa-facebook"></span>Facebook</a></li>
                                            <li class="log-goo"><a href=""><span class="fa fa-google"></span>Google</a></li>
                                        </ul>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('layouts.partial.footer')

