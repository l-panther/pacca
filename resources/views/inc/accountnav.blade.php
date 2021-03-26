<header role="banner" id="header">
    <nav class="navbar navbar-expand main-content" id="acc-primarynav">
        
        <!-- Logo -->
        <img src="/images/logo/logo.png" alt="Company logo" id="mini-logo"> 
    
        <div class="collapse navbar-collapse" id="account-logout">
             
            <ul class="nav-item" id="secondarynav">
                <!-- Authentication Links -->
                @guest
                    
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    
                    @if (Route::has('register'))
                        
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    
                    @endif
                @else
                
                    <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a></li>
    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                
                @endguest
            </ul>
        </div>
    </nav>
</header> <!-- End header -->