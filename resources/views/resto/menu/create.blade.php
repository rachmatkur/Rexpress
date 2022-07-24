@extends('master')

@section('title', 'Add Menu')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Menu</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('resto.add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Price</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" name="price">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Photo</label>
                                <input class="form-control" type="file" id="formFile" name="photo">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Stock</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" name="stock">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Category</label>
                                <select class="form-select" name='category_id' aria-label="Default select example">
                                    <option selected disabled>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-dark" type="submit">Add Restaurant</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
