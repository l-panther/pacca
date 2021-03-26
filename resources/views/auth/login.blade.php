@extends('layouts.login-register')

@section('content')

	<!-- Logo -->
	<div id="logo-container" class="w3-center">
		<a href="/" ><img src="images/logo/logo.png" alt="Company logo"></a>
	</div> 

    <div class="main-content">
        <div class="w3-container">
            
              <!-- Form: Add Activity -->
            <div  class="w3-animate-zoom" id="login-form">

                <h2>Sign in</h2>    
                
                <!-- Form: Login -->
                <form method="POST" action="{{ route('login') }}" >
                    @csrf
                        <!-- Email -->
                        <div class="w3-row w3-section">
                            <label for="email" class="w3-hide">{{ __('Email') }}</label>
                            <div class="w3-col" style="width:50px">
                                <i class="w3-xxlarge fa fa-user"></i>
                            </div>
                            <div class="w3-rest">
                                <input id="email" type="email" class="w3-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email address" required autocomplete="email" autofocus>

                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        
                        <!-- Password -->
                        <div class="w3-row w3-section">
                            <label for="password" class="w3-hide">{{ __('Password') }}</label>
                            <div class="w3-col" style="width:50px">
                                <i class="w3-xxlarge fa fa-lock"></i>
                            </div>

                            <div class="w3-rest">
                                <input id="password" type="password" class="w3-input @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label w3-margin-left" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                            
                        <button type="submit" class="w3-block w3-btn w3-padding">
                            {{ __('Log in') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link w3-margin-top w3-large" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    
                    <p class="w3-center">New to PACCA? <a href="/register">Sign up</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection
