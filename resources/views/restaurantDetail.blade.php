@extends('master')

@section('{{$resto->name}}')
    
@section('content')

<div class="container-fluid bg-light d-flex justify-content-center m-0 p-0 position-relative">
    <img src="/gambar/banner.jpg" alt="" class="background">
    <div class="contentContainer">
        <div class="d-flex flex-row align-items-center w-75" style="margin-bottom: 3%">
            <img src="/gambar/veggieJumble.png" alt="" class="w-50">
            <div class="w-50 h-100 d-flex flex-column">
                <h1 class="text-bold">{{$resto->name}}</h1>
                <p>{{$resto->description}}</p>
            </div>
        </div>
        <div class="w-75">
        </div>
    </div>
</div>

@endsection