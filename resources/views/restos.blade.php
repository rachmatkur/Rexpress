@extends('master')

@section('Restos')
    
@section('content')

<div class="container-fluid bg-light d-flex justify-content-center m-0 p-0 position-relative">
    <img src="/gambar/banner.jpg" alt="" class="background">
    <div class="contentContainer">
        <div class="d-flex flex-row align-items-center w-75" style="margin-bottom: 3% ">
            <h1 class="text-bold">It's not just food, it's an experience</h1>
            <img src="/gambar/veggieJumble.png" alt="" class="w-50">
        </div>
        <div class="w-75">
            <div class="row bg-light">
                @foreach ($restos as $resto)
                    <div class="col-4 d-flex align-items-center" style="margin-bottom: 3%">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$resto->name}}</h5>
                                <p class="card-text">{{$resto->description}}</p>
                                <a href="/restoDetail/{{$resto->id}}" class="btn btn-dark">Go to page</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- <div class="row bg-light" style="margin-bottom: 3%">
                <div class="col-4 d-flex align-items-center">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Restaurant A</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go to page</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex align-items-center">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Restaurant A</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go to page</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex align-items-center">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Restaurant A</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go to page</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

@endsection