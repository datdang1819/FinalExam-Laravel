<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        #navdoc a{
            margin-top: 10%;
        }
        #navdoc b{
            margin-top: 10%;
        }
    </style>
</head>
<body>
<div class="container">
    <nav>
        <div class="container-fluid">
        <a href='/home/'>
                <img src="http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-4/256/home-icon.png" alt="" width="50px" height="60px">
        </a>
        <p><a href='/home/'>Sweet Home</a></p>
        </div>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Best Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Life Style</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </nav>

    <div class="container-fluid row">
        <main class="col-md-9">
            @section('content')
            @show
        </main>
        <nav class="col-md-2">
            <div class="nav flex-column" id="navdoc">
                <b>Search by Arena</b>
                <a href="#">Hai Bà Trưng</a>
                <a href="#">Thanh Xuân</a>
                <a href="#">Cầu Giấy</a>
                <a href="#">Hồ Tây</a>
                <a href="#">Ba Đình</a>
                <b>Search by Price</b>
                <a href="#">1 tỷ -> 3 tỷ</a>
                <a href="#">3 tỷ -> 6 tỷ</a>
                <a href="#">6 tỷ -> 9 tỷ</a>
            </div>
        </nav>
    </div>

    <footer class="container-fluid mt-3 mb-3">
        <p class="text-center">Copyright @2018 FPT Aptech</p>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>