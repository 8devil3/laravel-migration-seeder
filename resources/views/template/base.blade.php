<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

   <!-- Styles -->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">

   <title>@yield('title')</title>
</head>


<body>
@include('header')

@yield('main')

@include('footer')
</body>
</html>
