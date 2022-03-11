<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <meta name="author" content="SemiColonWeb" />

   <!-- Stylesheets
	============================================= -->
   <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}" type="text/css" />
   <link rel="stylesheet" href="{{URL::asset('style.css') }}" type="text/css" />
   <link rel="stylesheet" href="{{URL::asset('css/swiper.css')}}" type="text/css" />
   <link rel="stylesheet" href="{{URL::asset('css/dark.css')}}" type="text/css" />
   <link rel="stylesheet" href="{{URL::asset('css/font-icons.css')}}" type="text/css" />
   <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}" type="text/css" />
   <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}" type="text/css" />

   <link rel="stylesheet" href="{{URL::asset('css/custom.css') }}" type="text/css" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />

   <!-- Document Title
	============================================= -->
   <title>Portal</title>

</head>
@include('partials.nav')

@yield('portalContent')

@include('partials.footer')

<script src="{{URL::asset('js/jquery.js')}}"></script>
<script src="{{URL::asset('js/plugins.min.js')}}"></script>

<!-- Footer Scripts
	============================================= -->
<script src="{{URL::asset('js/functions.js')}}"></script>

</body>

</html>