@extends('layouts.login-register')

@section('content')
   
	<!-- Logo -->
	<div id="logo-container" class="w3-center">
		<a href="/" ><img src="images/logo/logo.png" alt="Company logo"></a>
	</div> 

    <div class="main-content">
        <div class="w3-container">
            
            <!-- Form: Add Activity -->
          <div  class="w3-animate-zoom" id="register-form">

              <h2>Register</h2>    
              
              <!-- Form: Login -->
              <form method="POST" action="{{ route('register') }}" >
                  @csrf
                    <!-- Name -->
                    <div class="w3-row w3-section">
                        <label for="name" class="w3-hide">{{ __('Name') }}</label>
                        <div class="w3-col" style="width:50px">
                            <i class="w3-xxlarge fa fa-user"></i>
                        </div>
                        <div class="w3-rest">
                            <input id="name" type="text" class="w3-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>

                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="w3-row w3-section">
                        <label for="email" class="w3-hide">{{ __('Email') }}</label>
                        <div class="w3-col" style="width:50px">
                            <i class="w3-xlarge fa fa-envelope"></i>
                        </div>
                        <div class="w3-rest">
                            <input id="email" type="email" class="w3-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email address" required autocomplete="email">

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

                    <!-- Confirm password -->
                    <div class="w3-row w3-section">
                        <label for="password-confirm" class="w3-hide">{{ __('Confirm Password') }}</label>
                        <div class="w3-col" style="width:50px">
                            <i class="w3-xxlarge fa fa-lock"></i>
                        </div>

                        <div class="w3-rest">
                            <input id="password-confirm" type="password" class="w3-input" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                        
                    <button type="submit" class="w3-block w3-btn w3-padding">
                        {{ __('Register') }}
                    </button>

                    <p class="w3-center">Already have an account? <a href="/login">Sign in</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection
