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
<style>

</style>
<body>
    <div class="d-flex container-fluid bg-dark py-3 justify-content-center align-items-center min-vh-100">
        <div class="card w-100 border-0">
            <div class="row g-0">
                <div class="col-md-7">
                    <img src="/gambar/register-banner.jpg" class="h-100 w-100 rounded-1">
                </div>
                <div class="col-md-5">
                    <div class="card-body p-3 pt-0 d-flex flex-column">
                        <img src="/gambar/logo.png" alt="" class="img-fluid w-75 align-self-center">
                        <h2 class="card-title text-center">SIGN UP</h2>
                        <form action="{{ route('register') }}" method="POST" class="d-flex flex-column" enctype="multipart/form-data">
                            @csrf
                            <span>Name</span>
                            <input type="text" class="form-control mb-2" placeholder="Name" name="name" value="{{old('name')}}">
                            <span>Email</span>
                            <input type="text" class="form-control mb-2" placeholder="Email" name="email"  value="{{old('emaiol')}}">
                            <span>Password</span>
                            <input type="password" class="form-control mb-2" placeholder="Password" name="password">
                            <span>Address</span>
                            <textarea name="address" class="form-control mb-2" placeholder="Address"  value="{{old('address')}}"></textarea>
                            <span>Phone Number</span>
                            <input type="number" class="form-control mb-2"  name="phoneNumber"  value="{{old('phoneNumber')}}">
                            <span>Bio</span>
                            <textarea name="description" class="form-control mb-2" placeholder="Description" value="{{old('description')}}"></textarea>
                            <span>Profile Picture</span>
                            <input type="file" name="profilePicture" class="form-control mb-2" id="profilePicture" placeholder="thumbnail" required>
                            <a href="login" class="text-black align-self-center text-decoration-none m-2">Already have
                                an account?</a>
                            @if ($errors->any())
                                <div class="alert alert-danger d-flex flex-column justify-content-center align-items-center">
                                    @foreach ($errors->all() as $message)
                                        <p>{{ $message }}</p>
                                    @endforeach
                                </div>
                            @endif
                            <button class="btn btn-dark">REGISTER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
