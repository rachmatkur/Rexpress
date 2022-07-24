@extends('master')

@section('title', 'profile')

@section('content')
    <div class="container-fluid bg-light m-0 p-0 position-relative">
        <img src="/gambar/banner.jpg" alt="" class="background">
        <div class="contentContainer">
            <div class="card my-3 bg-transparent accordion shadow w-75">
                <div class="row g-0 p-3">
                    <div class="d-flex flex-column justify-content-center align-items-center col-md-6">
                        <img src="/gambar/{{$currentUser->profilePicture}}" alt="/gambar/egg.png" class="rounded-circle border shadow mb-3 img-fluid w-50" onerror="this.src='/gambar/egg.png';">
                        <h2 class="m-0">{{ $currentUser->name }}</h2>
                        @if ($currentUser->role === 1)
                            <p>user</p>
                        @else
                            @if ($currentUser->role === 2)
                                <p>admin</p>
                            @else
                                @if ($currentUser->role === 3)
                                    <p>restaurant</p>
                                @endif
                            @endif
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="card-body d-flex flex-column align-items-center justify-content-between h-100 gap-2 shadow rounded">
                            <div class="border-bottom w-100">{{$currentUser->description}}</div>
                            <div class="border-bottom w-100">
                                <div class="d-flex justify-content-center align-items-center gap-1">
                                    <img src="gambar/location-icon.png" alt="" style="width:2rem;"> 
                                    {{ $currentUser->address }}
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-1">
                                    <img src="gambar/phone-icon.webp" alt="" style="width:2rem;">
                                    {{ $currentUser->phoneNumber }}
                                </div>
                            </div>
                            <a href="{{route('profile.edit')}}" class="btn btn-dark w-50">Edit
                                Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
