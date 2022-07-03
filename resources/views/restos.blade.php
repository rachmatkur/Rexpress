@extends('master')

@section('Restos')

@section('content')

    <div class="container-fluid bg-light d-flex justify-content-center m-0 p-0 position-relative">
        <img src="/gambar/banner.jpg" alt="" class="background">
        <div class="contentContainer">
            <div class="d-flex flex-row align-items-center w-75" style="margin-bottom: 3% ">
                <h1 class="text-bold">It's not just food, it's an experience</h1>
                <img src="gambar/veggieJumble.png" alt="" class="w-50">
            </div>
            <div class="container">
                <div class="row bg-light row-cols-3" style="margin-bottom: 3%">
                    <div class="col-4 d-flex align-items-center">
                        <div class="card">
                            <img src="https://assets-pergikuliner.com/4o-dKncqKNS6QQbFDqM52WkrK0o=/fit-in/1366x768/smart/filters:no_upscale()/https://assets-pergikuliner.com/uploads/bootsy/image/12013/picture-1537766225.jpeg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Restaurant A</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                                <a href="#" class="btn btn-dark">Go to page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
