@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf
                <span class="login100-form-title p-b-55">
                    Join to <span style="color: rgb(17, 158, 56);">Laser Help</span>
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "User name is required">
                    <input type="hidden" name="user_type" value="1" id="user_type">
                    <input class="input100 form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" type="text" name="username" placeholder="User name" value="{{ old('username') }}" required autofocus>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="fa fa-user"></span>
                    </span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required >
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="fa fa-envelope"></span>
                    </span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                    <input class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="fa fa-lock"></span>
                    </span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                    <input class="input100 form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="password" name="password_confirmation" placeholder="Repeat Password" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="fa fa-lock"></span>
                    </span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="m-b-16 w-full" style="display: flex; justify-content: space-between;">
                    <button type="button" class="switch_btn switch_btn_active">
                        As Customer
                    </button>
                    <button type="button" class="switch_btn">
                        As Expert
                    </button>
                </div>
                <div class="container-login100-form-btn p-t-25">
                    <button class="login100-form-btn">
                        Join
                    </button>
                </div>
                
                <div class="text-center w-full p-t-11">
                    <span class="txt1">
                        Already sign up?
                    </span>
                    <a class="txt1 bo1 hov1" href="{{ route('login') }}">
                        Login here					
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section("script")
    <script type="text/javascript">
        $(".switch_btn").on("click", function(e){
            if($(e.target).hasClass("switch_btn_active")){
                return;
            }else {
               $(".switch_btn").removeClass("switch_btn_active") ;
               $(e.target).addClass("switch_btn_active");
               if($("#user_type").val()=="1") {
                    $("#user_type").val("2")
               }else {
                    $("#user_type").val("1");
               } 
            }
        })
    </script>
@endsection