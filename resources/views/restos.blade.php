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
                        <div class="col-4 d-flex" style="margin-bottom: 3%">
                            <div class="card">
                                <img src="https://asset.kompas.com/crops/_JNx4qMilh-DuimKD-U4lqCHikc=/0x0:1000x667/750x500/data/photo/2021/12/21/61c161511efb8.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $resto->name }}</h5>
                                    <p class="card-text">{{ $resto->description }}</p>
                                    <a href="/restoDetail/{{ $resto->id }}" class="btn btn-dark">Go to page</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    @endsection
