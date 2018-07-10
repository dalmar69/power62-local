@extends('layouts.home')

@section('content')
<div class="register">
    <div class="row">
        <h1 class="form-header header-shadow">PICK YOUR planet. Name your Virtual Starport. <br>
            Build It. Own it! <Span class="white">Sign Up Now. It's Free</Span>
        </h1>
        <div class="content-container">
            <img src="images/auth/registration/bg.png" alt="" class="form-bg">
            <form method="POST" class="form" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf
                <!-- Name -->
                <div class="form-group">
                    <label for="name" class="label">{{ __('Your Name') }}</label>
                        <input id="name" type="text" class="input-text form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                </div>
                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="label">{{ __('Your Email Address') }}</label>
                        <input id="email" type="email" class="input-text form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                <!-- username -->
                <div class="form-group">
                    <label for="user_name" class="label">{{ __('Your User Name') }}</label>
                        <input id="user_name" type="user_name" class="input-text form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" name="user_name" value="{{ old('user_name') }}" required>
                        @if ($errors->has('user_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('user_name') }}</strong>
                            </span>
                        @endif
                </div>
                <!-- password -->
                <div class="form-group">
                    <label for="password" class="label">{{ __('Your Password') }}</label>
                        <input id="password" type="password" class="input-text form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
                <!-- password confirm -->
                <div class="form-group">
                    <label for="password-confirm" class="label">{{ __('Retype Your Password') }}</label>                   
                        <input id="password-confirm" type="password" class="input-text form-control" name="password_confirmation" required>
                </div>
                 <!-- Pick Your Planet -->
                 <div class="form-group">
                    <label for="planet" class="label">{{ __('Pick Your Planet') }}</label>
                    <select name="planets" class="input-select" value="" required>
                        <option value=""></option>
                        <option value="mars">mars</option>
                        <option value="earth">earth</option>
                        <option value="venus">venus</option>
                        <option value="pluto">pluto</option>
                    </select>                     
                    <!-- @if ($errors->has('planet'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('planet') }}</strong>
                        </span>
                    @endif  -->
                </div>
                <!-- Select A City -->
                 <div class="form-group">
                    <label for="city" class="label">{{ __('Select your City') }}</label>
                    <select name="city" class="input-select" value="" required>
                        <option value=""></option>
                        <option value="detroit">detroit</option>
                        <option value="new_york">new york</option>
                        <option value="johnson_city">johnson city</option>
                        <option value="knoxvile">knoxvile</option>
                    </select>                        
                    <!-- @if ($errors->has('city'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif -->
                </div>
                 <!-- Starport Name -->
                 <div class="form-group">
                    <label for="starport_name" class="label">{{ __('Name your starport') }}</label>
                        <input id="starport_name" type="starport_name" class="input-text  form-control{{ $errors->has('starport_name') ? ' is-invalid' : '' }}" name="starport_name" value="{{ old('starport_name') }}" required>
                        @if ($errors->has('starport_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('starport_name') }}</strong>
                            </span>
                        @endif
                </div>
                <!-- checkbox -->
                <div class="form-group checkbox-group">
                    <input type="checkbox" class="checkbox" name="terms-agreement" value="yes" required> <span class="checkbox-text">I agree to the Terms and Conditions</span>
                    <input type="checkbox" class="checkbox" name="robot" value="no" required> <span class="checkbox-text">I am Not a robot</span> 
                </div>
                <!-- submit -->
                <div class="form-group submit-container">        
                    <button type="submit" class="submit">
                        {{ __('JOIN') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.body.style.overflow = "hidden";
</script>
@endsection
