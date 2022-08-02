@extends('master')

@section('title', 'History')

@section('content')
    <div class="container mt-4">
        <div class="">
            <a href="{{ route('resto.index') }}" class="btn btn-dark">
                Dashboard
            </a>
            <a href="{{ route('resto.add') }}" class="btn btn-dark">
                Add Menu
            </a>
            <a href="{{ route('category.add') }}" class="btn btn-dark">
                Add Category
            </a>
            <a href="{{ route('restaurant.history') }}" class="btn btn-dark">Order History</a>
        </div>
        @if ($transactions->isEmpty())
            <h1 class="mt-5">No transactions yet!</h1>
        @else
            <div class="container-fluid w-100 m-0 p-0 mt-4">
                @foreach ($transactions as $transaction)
                    <div class="d-flex border-dark shadow rounded mb-1 align-items-center bg-light bg-opacity-75"
                        style="height: 5rem">
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
                            <h5>IDR {{ $transaction->total }} by {{$transaction->user->name}}</h5>
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
@endsection
