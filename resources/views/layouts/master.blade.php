<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="css/app.css" rel="stylesheet">
    <title>My Blog</title>
</head>
<body>
<div class="container">
    @include('layouts.header')
    @include('layouts.nav')
</div>
@if($flash = session('message'))
    <div id="flash-message" class="alert alert-success" role="alert">
        {{$flash}}
    </div>
@endif
<main role="main" class="container">
    <div class="row">
        @yield('content')
        @include('layouts.sidebar')
    </div>
</main>
@include('layouts.footer')
</body>
</html>