@extends('layouts.home')

@section('content')
<div class="login">
    <div class="row">
        <!-- login panel image -->
        <div class="login-panel-container">
            <img src="images/auth/login/login-panel.png" alt="panel-img" class="login-panel-img">
            <div class="form-and-links-container">
                <form class="form login-panel-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf
                    <h3 class="login-header">LOG IN</h3>
                    <!-- Email -->
                    <div class="form-group">
                        <!-- <label for="email" class="email-label">{{ __('E-Mail Address') }}</label> -->  
                            <input id="email" type="email" placeholder="Email" class="input email-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif               
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                        <!-- <label for="password" class="password-label">{{ __('Password') }}</label> -->              
                            <input id="password" type="password" placeholder="Password" class="input password-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif        
                    </div>
                    <!-- Remeber Me -->
                    <!-- <div class="form-group">
                        <div class="col-md-6 offset-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div> -->
                    <!-- Buttons -->
                    <div class="form-group">
                        <div class="">
                            <!-- login -->
                            <button type="submit" class="login-btn">
                                <img src="images/auth/login/btn-enter.png" alt="" class="login-btn-img">
                                <!-- {{ __('Login') }} -->
                            </button>
                            <!-- Forgot Password? -->
                            <a class="forgot-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>
                </form>
                <div class="login-panel-links-container">
                    <ul class="links-ul">
                        <li> <img src="images/auth/login/right-arrow.svg" alt="" class="right-arrow"> <a href="/graphic-novel">GRAPHIC NOVEL</a></li>
                        <li> <img src="images/auth/login/right-arrow.svg" alt="" class="right-arrow"> <a href="/underconstruction">STARPORT</a></li>
                    </ul>
                </div>
            </div>
            
        </div>   
    </div>
</div>

<script>
    document.body.style.overflow = "hidden";
</script>
@endsection
