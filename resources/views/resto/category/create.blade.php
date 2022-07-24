@extends('master')

@section('title', 'Add Category')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Category</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.add') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="category">
                            </div>
                            <button class="btn btn-dark" type="submit">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 row-cols-3">
            @foreach ($categories as $category)
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            {{ $category->category }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
