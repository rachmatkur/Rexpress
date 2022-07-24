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
                <div class="row bg-light row-cols-3">
                    @foreach ($restos as $resto)
                        <div class="col-md-4 d-flex align-items-center mb-4">
                            <div class="card w-100 h-100">
                                <img src="/gambar/{{$resto->profilePicture}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $resto->name }}</h5>
                                    <p class="card-text">{{ $resto->description }}</p>
                                </div>
                                <div class="card-footer border-0 bg-transparent">
                                    <a href="/restoDetail/{{ $resto->id }}" class="btn btn-dark">Go to page</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    @endsection
