@extends('master')

@section('title','History')
    
@section('content')
<div class="container-fluid bg-light m-0 p-0 position-relative">
    <img src="/gambar/banner.jpg" alt="" class="background">
    <div class ="contentContainer">
        <ul class="nav nav-pills nav-fill" style="margin-top: 30px">
            <li class="nav-item">
              <a class="nav-link text-body" href="/cart">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/history">History</a>
            </li>
          </ul>
    </div>
</div>

@endsection
