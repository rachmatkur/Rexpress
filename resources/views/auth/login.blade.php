<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        .wrapper {
            width: 100vw;
            height: 100vh;
        }

        .loginContainer {
            height: 400px;
            width: 300px;
            border-radius: 10px;
            flex-direction: column;
        }

        .form {
            flex-direction: column;
        }

        .input {
            margin-bottom: 10px;
        }

        .link {
            text-decoration: none;
            margin-top: 15px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="d-flex container-fluid bg-dark wrapper justify-content-center align-items-center">
        <div class="container loginContainer bg-light d-flex align-items-center justify-content-center">
            <h2>LOGIN</h2>
            <form action="{{ route('login') }}" method="POST" class="d-flex flex-column align-items-center">
                @csrf
                <div class="d-flex form">
                    <span>Email</span>
                    <input type="text" class="form-control input" placeholder="Email" name="email">
                    <span>Password</span>
                    <input type="password" class="form-control input" placeholder="Password" name="password">
                    {{-- <label class="text-black"><input type="checkbox">Remember me</label> --}}
                </div>
                <a href="register" class="link text-black">Don't have an account? Register now!</a>
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
</body>

</html>
