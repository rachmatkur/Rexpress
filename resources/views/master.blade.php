<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark d-flex justify-content-evenly">
        <ul class="navbar-nav w-25 d-flex justify-content-evenly">
            <li class="nav-item">
                <a href="" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Food</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">My Orders</a>
            </li>
        </ul>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarScrollingDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                <li><a class="dropdown-item" href="#">Log Out</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>
