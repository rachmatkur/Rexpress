@extends('master')

@section('{{ $resto->name }}')

@section('content')

    <div class="container-fluid bg-light d-flex justify-content-center m-0 p-0 position-relative">
        <img src="/gambar/banner.jpg" alt="" class="background">
        <div class="contentContainer">
            <div class="d-flex flex-row align-items-center w-75" style="margin-bottom: 3%">
                <img src="/gambar/veggieJumble.png" alt="" class="w-50">
                <div class="w-50 h-100 d-flex flex-column">
                    <h1 class="text-bold">{{ $resto->name }}</h1>
                    <p>{{ $resto->description }}</p>
                </div>
            </div>
            <div class="w-75">
                <div class="row bg-light">
                    @foreach ($menus as $menu)
                        <div class="col-md-4 d-flex align-items-center mb-4">
                            <div class="card w-100 h-100">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $menu->name }}</h5>
                                    <p class="card-text">{{ $menu->description }}</p>
                                    <p class="card-text">{{ $menu->stock }} available</p>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <h5>IDR {{ $menu->price }}</h6>
                                        <a href="" class="btn btn-dark">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    @endsection
