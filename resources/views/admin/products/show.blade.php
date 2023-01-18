@extends('layouts.admin')

@section('content')
<div class="text-center">
    <div class="text-center mb-4">
        <h1 class=" text-center mb-0 text-gray-800 py-4">{{$product->title}}</h1>
    </div>
    <img src="{{asset('storage/' . $product->image)}}" alt="{{$product->name}}">
    <p class="my-4">
        {{$product->description}}
    </p>
    <h6>
        {{$product->price}}
    </h6>
</div>
@endsection