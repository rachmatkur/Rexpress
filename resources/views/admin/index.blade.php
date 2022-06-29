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
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
