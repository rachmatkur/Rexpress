@extends('master')

@section('title', 'Update Restaurant')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Restaurant</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.edit', $restaurant->id) }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" value="{{ $restaurant->name }}"
                                    id="exampleFormControlInput1" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com" name="email" value="{{ $restaurant->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="address">{{ $restaurant->address }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" name="phoneNumber"
                                    value="{{ $restaurant->phoneNumber }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="description">{{ $restaurant->description }}</textarea>
                            </div>
                            <button class="btn btn-dark" type="submit">Update Restaurant</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
