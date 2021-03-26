<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="admin-html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'PACCA')}}</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/custom.scss">
        <link rel="stylesheet" href="/w3/w3.css">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- W3CSS materials & icons -->
    
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap"> <!--Google font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Schoolbell&display=swap"> <!--Google font -->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> <!-- W3CSS Fonts -->
		
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- CSS from google fonts: -->
    
        <!-- Include jQuery Mobile stylesheets -->
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

<!-- Include the jQuery library -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include the jQuery Mobile library -->
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		    <script src="https://maps.googleapis.com/maps/api/js"></script> <!-- Google maps -->  
        <script src="{{asset('js/app.js')}}"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <!--  <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
    
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Year', 'Sales', 'Expenses'],
              ['2004',  1000,      400],
              ['2005',  1170,      460],
              ['2006',  660,       1120],
              ['2007',  1030,      540]
            ]);
    
            var options = {
              title: 'Company Performance',
              curveType: 'function',
              legend: { position: 'bottom' }
            };
    
            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
    
            chart.draw(data, options);
          }
        </script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['bar']});
                google.charts.setOnLoadCallback(drawChart);
          
                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['Year', 'Sales', 'Expenses', 'Profit'],
                    ['2014', 1000, 400, 200],
                    ['2015', 1170, 460, 250],
                    ['2016', 660, 1120, 300],
                    ['2017', 1030, 540, 350]
                  ]);
          
                  var options = {
                    chart: {
                      title: 'Company Performance',
                      subtitle: 'Sales, Expenses, and Profit: 2014-2017',
                    },
                    bars: 'vertical' // Required for Material Bar Charts.
                  };
          
                  var chart = new google.charts.Bar(document.getElementById('bar_chart'));
          
                  chart.draw(data, google.charts.Bar.convertOptions(options));
                }
              </script> -->
    
    </head>
    <body>
        <div id="account-page">
            @include('inc.accountnav')
            <!-- Main+ role -->
            <main role="main">
              @include('inc.messages')

              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif

              @yield('content-nav')

                <!-- Account main -->
                <div class="w3-col s12 m12 l9" id="account-main">
                                    
                  @yield('content-main')

                </div>
                
            </main>
        </div>
    </body>
</html>

