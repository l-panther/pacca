<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="auth-form">
    @include('inc.head-web')
    <body>
        <div id="login-register-page">
            <main role="main">
                @yield('content')
            </main>
            @include('inc.footer-lr')
        </div>
    </body>
</html>

