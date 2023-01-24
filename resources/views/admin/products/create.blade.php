@extends('layouts.admin')

@section('content')

<body>


    <h1>Create new Products </h1>

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}

    </div>
    @endif

    <form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                aria-describedby="helpId" value="{{ old('name') }}">
            <small id="helpId" class="text-muted">Insert name, required field</small>
        </div>
        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror"
                aria-describedby="helpId" value="{{ old('slug') }}">
            <small id="helpId" class="text-muted"></small>
        </div>
        @error('slug')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description"
                class="form-control @error('description') is-invalid @enderror" aria-describedby="helpId"
                value="{{ old('description') }}"></textarea>
            <small id="helpId" class="text-muted"></small>
        </div>
        @error('description')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input step="0.01" type="number" name="price" id="price"
                class="form-control @error('price') is-invalid @enderror" aria-describedby="helpId"
                value="{{ old('price') }}">
            <small id="helpId" class="text-muted"></small>
        </div>
        @error('price')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="mb-3">
            <label for="product_image" class="form-label">Add image</label>
            <input type="file" name="product_image" id="product_image" class="form-control @error('product_image') is-invalid @enderror"
                placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Must be max 250kb</small>
        </div>
        @error('image')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <button class="btn btn-primary" type="submit">Add Product</button>

    </form>


</body>
@endsection