@extends('master')

@section('title', 'profile')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Restaurant</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profile.store') }}" method="POST" class="d-flex flex-column"
                            enctype="multipart/form-data">
                            @csrf
                            <span>Name</span>
                            <input type="text" class="form-control mb-3" placeholder="Name" name="name"
                                value="{{ $currentUser->name }}">
                            <span>Email</span>
                            <input type="text" class="form-control mb-3" placeholder="Email" name="email"
                                value="{{ $currentUser->email }}">
                            <span>Password</span>
                            <input type="password" class="form-control mb-3" placeholder="Password" name="password">
                            <span>Address</span>
                            <textarea name="address" class="form-control mb-3" placeholder="Address" value="{{ $currentUser->address }}"></textarea>
                            <span>Phone Number</span>
                            <input type="number" class="form-control mb-3" name="phoneNumber"
                                value="{{ $currentUser->phoneNumber }}">
                            <span>Bio</span>
                            <textarea name="description" class="form-control mb-3" placeholder="Description" value="{{ old('description') }}"></textarea>
                            <span>Profile Picture</span>
                            <input type="file" name="profilePicture" class="form-control mb-3" id="profilePicture"
                                placeholder="thumbnail" required>
                            @if ($errors->any())
                                <div
                                    class="alert alert-danger d-flex flex-column justify-content-center align-items-center">
                                    @foreach ($errors->all() as $message)
                                        <p>{{ $message }}</p>
                                    @endforeach
                                </div>
                            @endif
                            <button class="btn btn-dark w-50 align-self-center">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
