@extends('master')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="mt-4">
            <a href="{{ route('resto.add') }}">
                <button class="btn btn-dark">Add Menu</button>
            </a>
            <a href="{{ route('category.add') }}">
                <button class="btn btn-dark">Add Category</button>
            </a>
        </div>
        <div class="row mt-4">
            <div class="col">
                @foreach ($menus as $resto)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="{{ asset($resto->image) }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $resto->name }}</h5>
                                    <p class="card-text">{{ $resto->price }}</p>
                                    <p class="card-text">{{ $resto->stock }}</p>
                                    <p class="card-text">{{ $resto->description }}</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center py-2">
                                <div class="btn">
                                    <a href="{{ route('resto.edit', $resto->id) }}" class="btn btn-dark disabled">Update</a>
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
