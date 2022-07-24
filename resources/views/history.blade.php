@extends('master')

@section('title', 'History')

@section('content')
    <div class="container-fluid bg-light m-0 p-0 position-relative">
        <img src="/gambar/banner.jpg" alt="" class="background">
        <div class="contentContainer">
            <ul class="nav nav-pills nav-fill" style="margin-top: 30px">
                <li class="nav-item">
                    <a class="nav-link text-body" href="/cart">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/history">History</a>
                </li>
            </ul>
            @if ($transactions->isEmpty())
                <h1 class="mt-5">No transactions yet!</h1>
            @else
                <div class="container-fluid w-75 mt-3">
                    @foreach ($transactions as $transaction)
                        <div class="d-flex border-dark shadow rounded mb-1 align-items-center bg-light bg-opacity-75" style="height: 5rem">
                            <div class="d-flex h-100" style="width: 16rem">
                                <a href="" class="w-100 h-100"><img
                                        src="/gambar/menu/{{ $transaction->menu->category->category }}/{{ $transaction->menu->image }}"
                                        class="h-100 rounded img-fluid" alt=""></a>
                            </div>
                            <div class="container mt-1 d-flex flex-column justify-content-center">
                                <h5 class="text-start">{{ $transaction->menu->name }}</h5>
                                <small class="text-start">{{ $transaction->menu->category->category }}</small>
                            </div>
                            <div class="container mt-1 d-flex flex-column justify-content-center">
                                <h5>IDR {{ $transaction->total }}</h5>
                                <small>{{ $transaction->created_at }}</small>
                            </div>

                            <div class="container text-end mt-1">
                                <h5 class="">{{ $transaction->qty }}x</h5>
                                <small>{{ $transaction->menu->price }} EACH</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

@endsection
