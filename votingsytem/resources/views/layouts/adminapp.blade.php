<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - System </title>

<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>
<body>

    @include("layouts.include.admintopheader")

@include("layouts.include.adminheader")

<section>
 
    @include("layouts.include.adminsidebar")
  
  <article>
    <main class="py-4">
        @yield('content')
    </main>
</article>
</section>

@include("layouts.include.adminfooter")

</body>
</html>



        
  
