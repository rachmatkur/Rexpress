<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <div class="d-flex container-fluid bg-dark py-3 justify-content-center align-items-center min-vh-100">
        <div class="card w-100 border-0">
            <div class="row g-0">
                <div class="col-md-7">
                    <img src="/gambar/login-banner.jpg" alt="" class="img-fluid rounded-1">
                </div>
                <div class="col-md-5">
                    <div class="card-body p-3 pt-0 d-flex flex-column">
                        <img src="/gambar/logo.png" alt="" class="img-fluid align-self-center w-75">
                        <h2 class="card-title text-center">LOGIN</h2>
                        <form action="{{ route('login') }}" method="POST"
                            class="d-flex flex-column">
                            @csrf
                            <div class="">
                                <span>Email</span>
                                <input type="text" class="form-control mb-2" placeholder="Email" name="email">
                                <span>Password</span>
                                <input type="password" class="form-control mb-2" placeholder="Password"
                                    name="password">
                                {{-- <label class="text-black"><input type="checkbox">Remember me</label> --}}
                            </div>
                            <a href="register" class="text-decoration-none text-black text-center m-2">Don't have an account? Register now!</a>
                            @if ($errors->any())
                                <div class="alert alert-danger d-flex justify-content-center align-items-center">
                                    @foreach ($errors->all() as $message)
                                        {{ $message }}
                                    @endforeach
                                </div>
                            @endif
                            <button class="btn btn-dark">LOG IN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
