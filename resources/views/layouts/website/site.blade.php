<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{setting()->website_name ?? ''}}</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> --}}
        
        <link rel="stylesheet" href="{{ asset('public/css/app.css') }}"> 
        <link rel="stylesheet" href="{{ asset('public/css/now-ui-kit.min.css') }}">

    </head>
    <body class="antialiased">

		@include('layouts.website.includes.navbar')
		
		<div class="container">

			@yield('content')

		</div>

        <script src="{{ asset('public/js/jquery.min.js') }}"></script>
		
		@yield('jquery')

    </body>
</html>
