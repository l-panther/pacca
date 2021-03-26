<header role="banner" id="header">
    <nav class="navbar navbar-expand-lg navbar-dark" id="primarynav">
        
        <!-- Logo -->
        <img src="images/logo/logo.png" alt="Company logo" id="mini-logo"> 

         <!-- Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        	<i class="fa fa-bars w3-text-white"></i>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#summer">SUMMER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT</a>
                </li>
           
                <!-- Authentication Links -->
				
                @guest
                    <li>
						<a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
					</li>
                    
                    @if (Route::has('register'))
                        <li>
                            <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                    	</li>
                    @endif
                @else
                	<li>
                    	<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    	</a>
					</li>
    
					<li>
						<div class="w3-dropdown-hover dropdown-menu dropdown-menu-right" id="logout" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<a class="dropdown-item" href="">Staff management</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					</li>
                
                @endguest
            </ul>
        </div>
    </nav>
</header> <!-- End header -->