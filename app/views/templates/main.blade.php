<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Smart Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    {{ HTML::style('bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('bootstrap/css/bootstrap-theme.min.css') }}
    {{ HTML::style('css/main.css') }}
    
    
  @yield('styles')
 
</head>
<body>
 
 <!-- menu -->
  @include('_includes.top_menu')
  <!--/ menu -->

     <div class="container">
         <div class="row">

          @yield('content')            

         </div><!--/ row -->
    </div><!--/container-->

{{ HTML::script('js/jquery-2.0.3.min.js') }} 
{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('lib/jquery.raty.min.js') }}

@yield('scripts')

</body>
</html>
