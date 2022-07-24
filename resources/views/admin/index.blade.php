@extends('master')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="mt-4">
            <a href="{{ route('admin.add') }}">
                <button class="btn btn-dark">Add Restaurant</button>
            </a>
        </div>
        <div class="row mt-4">
            <div class="col">
                @foreach ($restaurants as $resto)
                    <div class="card mb-3">
                        <div class="row g-0 d-flex align-items-center">
                            <div class="col-md-3">
                                <img src="/gambar/{{$resto->profilePicture}}" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $resto->name }}</h5>
                                    <p class="card-text">{{ $resto->description }}</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center py-2">
                                <div class="btn">
                                    <a href="{{ route('admin.edit', $resto->id) }}" class="btn btn-dark">Update</a>
                                    <form action="{{ route('admin.delete', $resto->id) }}" method="POST" class="d-inline">
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
    </div>
@endsection
