<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .background {
            -webkit-mask-image: linear-gradient(to top,
                    rgba(0, 0, 0, 0),
                    rgba(0, 0, 0, 1));
            width: 100%;
            height: 100%;
        }

        .contentContainer {
            position: absolute;
            top: 1%;
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
        <div class="container-sm d-flex justify-content-center pe-5">
            <a href="/home" class="text-decoration-none" style="color: #F3A712"><img src="/gambar/logo.png"
                alt="" style="width: 50px">REXPRESS</a>
        </div>
      
        <ul class="navbar-nav w-75 d-flex justify-content-evenly h-100 container-md">
            <li class="nav-item">
                <a href="/home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="/restos" class="nav-link">Restos</a>
            </li>
            <li class="nav-item">
                <a href="/cart" class="nav-link">Orders</a>
            </li>
            @if ($role_id == '2')
                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link">Admin</a>
                </li>
            @endif
            @if ($role_id == '3')
                <li class="nav-item">
                    <a href="/resto/dashboard" class="nav-link">Restaurant</a>
                </li>
            @endif
        </ul>
        <div class="container-md justify-content-center">
            <div class="nav-item dropdown">
                @if ($user)
                    <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarScrollingDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="/profile">View Profile</a></li>
                        <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                    </ul>
                @else
                    <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarScrollingDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Guest
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="/login">Log In</a></li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>
    @yield('content')
</body>

<style>
    @media (min-width: 1025px) {
        .h-custom {
            height: 100vh !important;
        }
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }

    .bg-grey {
        background-color: #eae8e8;
    }

    @media (min-width: 992px) {
        .card-registration-2 .bg-grey {
            border-top-right-radius: 16px;
            border-bottom-right-radius: 16px;
        }
    }

    @media (max-width: 991px) {
        .card-registration-2 .bg-grey {
            border-bottom-left-radius: 16px;
            border-bottom-right-radius: 16px;
        }
    }
</style>

</html>
