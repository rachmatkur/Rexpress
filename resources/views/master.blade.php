<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        .background{
            -webkit-mask-image: linear-gradient(
            to top,
            rgba(0, 0, 0, 0),
            rgba(0, 0, 0, 1)
          );
          width: 100%;
          height: 100%;
        }
        .contentContainer {
            position: absolute; top: 1%;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .carousel-caption {
            top: 0;
            bottom: auto;
        }
    </style>
    <script src="{{ asset('js/app.js') }}"></script>
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark d-flex justify-content-evenly align-items-center">
        <a href="/home" class="nav-brand"><img src="/gambar/logo.webp" alt="" style="height: 50px; width: 100px;"></a>
        <ul class="navbar-nav w-25 d-flex justify-content-evenly h-100"> 
            <li class="nav-item">
                <a href="/home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="/restos" class="nav-link">Restos</a>
            </li>
            <li class="nav-item">
                <a href="/orders" class="nav-link">My Orders</a>
            </li>
        </ul>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarScrollingDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">View Profile</a></li>
                <li><a class="dropdown-item" href="#">Log Out</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>

</html>
