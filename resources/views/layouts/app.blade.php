<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	@include('inc.head-web')
<body>
    <div id="webpage">
        @include('inc.navbar')
        <main role="main">
            @include('inc.messages')
            @yield('main-content')
        </main>
        @include('inc.skiplink')
        @include('inc.footer')
    </div>
	
	<!-- All JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- Jquery -->
    <script src="https://maps.googleapis.com/maps/api/js"></script> <!-- Google maps -->  
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/hideNav.js')}}"></script> 
    <script src="{{asset('js/showMap.js')}}"></script>
    <!-- <script src="{{asset('js/slideShow.js')}}"></script> -->
    <script src="{{asset('js/getActivities.js')}}"></script>
    <script src="{{asset('js/getEvents.js')}}"></script>
    <script src="{{asset('js/testimonials.js')}}"></script>
	
</body>
</html>
