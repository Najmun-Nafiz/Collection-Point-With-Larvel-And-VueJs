@include('layouts.partial.header')
            

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header" style="background-color: black;padding: 10px;color: white;font-weight: bold;">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body" style="background-color: green;padding: 10px;color: white;">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}" style="color: yellow;">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.partial.footer')
