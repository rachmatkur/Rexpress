@extends('master')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="mt-4">
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
        <div class="row mt-4">
            <div class="col">
                @foreach ($menus as $resto)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="/gambar/menu/{{$resto->category->category}}/{{$resto->image}}" class="img-fluid rounded-start w-100" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $resto->name }}</h5>
                                    <p class="card-text">{{ $resto->price }}</p>
                                    <p class="card-text">{{ $resto->stock }}</p>
                                    <p class="card-text">{{ $resto->description }}</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center py-2 align-items-center">
                                <div class="btn">
                                    <form action="{{ route('resto.delete', $resto->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{ $menus->links() }}
    </div>
@endsection
