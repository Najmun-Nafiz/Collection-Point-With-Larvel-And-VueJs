
@include('layouts.partial.header')

        
        <div class="zmovo-inner-page">
            <div class="zmovo-login-page">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-3 col-lg-5">
                            <div class="zmovo-page-login mt-50">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="zmovo-login-input-top">
                                        <div class="form-group">
                                            <input class="form-control" name="email" required="" type="text" placeholder="Enter your Email">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="password" required="" type="password" placeholder="Enter your Password">
                                        </div>
                                    </div>
                                    <div class="zmovo-login-btns">
                                        <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}</button>
                                        <a href="{{ route('register') }}" class="btn btn-danger">Register</a>
                                        
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
