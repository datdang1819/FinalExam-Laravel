<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
<a href="#">
    <img src="https://cdn1.iconfinder.com/data/icons/real-estate-1-2/128/18-512.png" alt=""
                 class="img-thumbnail rounded-circle w-25 mr-2 float-left">
</a>
<nav class="navbar navbar-light bg-light">
    <div class="col-md-10">
        <a href="#">Home</a>
        <a href="#">Best Home</a>
        <a href="#">Home</a>
        <a href="#">Best Home</a>
        <a href="#">Home</a>
    </div>
    <div class="col-md-2">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
    </div>



</nav>
<div class="container-fluid row mt-2">
    <main class="col-md-10">
        @section('content')
        @show
    </main>
    <nav class="col-md-2">
        <div class="nav flex-column nav-pills">
            <a class="nav-link" href="/admin/bakery/list">Home</a>
            <a class="nav-link{{$currentPage=='bakery-list'?' active':''}}" href="/admin/bakery/list">Bakery Manager</a>
            <a class="nav-link" href="/admin/category">Category Manager</a>
            <a class="nav-link" href="/admin/article">Article Manager</a>
            <a class="nav-link" href="#v-pills-settings">Settings</a>
        </div>
    </nav>
</div>
<footer class="container-fluid mt-3 mb-3">
    <p class="text-center">Copyright @2018 FPT Aptech</p>
</footer>
</body>
</html>