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
                                <img src="/gambar/menu/{{$menu->category->category}}/{{$menu->image}}" class="card-img-top h-50" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $menu->name }}</h5>
                                    <p class="card-text">{{ $menu->description }}</p>
                                    <p class="card-text">{{ $menu->stock }} available</p>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    @if (session()->has('message') && $menu->id == session('id'))
                                        <p class="text-success">{{ session('message') }}</p>
                                    @endif
                                    @if (session()->has('error') && $menu->id == session('id'))
                                    <p class="text-danger">{{ session('error') }}</p>
                                    @endif
                                    <h5>IDR {{ $menu->price }}</h6>
                                    <a href="{{route('cart.add', $menu)}}" class="btn btn-dark">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    @endsection
