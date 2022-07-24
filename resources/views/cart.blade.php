@extends('master')

@section('title', 'Cart')

@section('content')
    <div class="container-fluid bg-light m-0 p-0 position-relative">
        <img src="/gambar/banner.jpg" alt="" class="background">
        <div class="contentContainer">
            <ul class="nav nav-pills nav-fill" style="margin-top: 30px">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/cart">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-body" href="/history">History</a>
                </li>
            </ul>
            @if (!$carts->isEmpty())
                <h1 class="cartResto mt-3">
                    {{ $restaurant->name }}
                </h1>
                <div class="col col-md-11">
                  @foreach ($carts as $cart)
                      <div class="d-flex border-dark shadow rounded mb-1 align-items-center bg-light bg-opacity-75" style="height: 5rem">
                          <div class="d-flex h-100" style="width: 16rem">
                              <a href="" class="w-100 h-100"><img src="/gambar/menu/{{$cart->menu->category->category}}/{{ $cart->menu->image}}" class="h-100 rounded img-fluid" alt=""></a>
                          </div>
                          <div class="container mt-1 d-flex flex-column justify-content-center">
                              <h5 class="text-start">{{ $cart->menu->name }}</h5>
                              <small class="text-start">{{ $cart->menu->category->category }}</small>
                          </div>
                          <h5 class="w-50">IDR {{$cart->menu->price}}</h5>
                          <div class="container text-end mt-1">
                              <h6 class="">{{ $cart->qty }}x</h6>
                              <a href="{{ route('cart.add', $cart->menu) }}" class="btn btn-dark">+</a>
                              <a href="{{ route('cart.remove', $cart->menu) }}" class="btn btn-danger">-</a>
                          </div>
                      </div>
                  @endforeach
                  {{-- Total Harga --}}
                  <div class="d-flex shadow border-dark rounded d-flex align-items-center justify-content-between mb-3 bg-light bg-opacity-75" style="height: 5rem">
                      <div class="container d-flex flex-column">
                          <h6 class="text-start">Total</h6>
                          <small class="text-start">{{$carts->count()}} item(s)</small>
                      </div>
                      <div class="container text-end d-flex align-items-center justify-content-end">
                          <h6 class="">{{$total}} IDR</h6>
                      </div>
                  </div>
                  {{-- Button Checkout --}}
                  <div class="text-end">
                      <a href="/cart/checkout" class="btn btn-dark">Checkout</a>
                  </div>
              </div>
            @else
                <h1 class="mt-5">Cart is empty!</h1>
            @endif

        </div>
    </div>

@endsection
