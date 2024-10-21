
@extends('layout')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}">
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $product->description }}</textarea>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{ $product->price }}">
        <button type="submit">Update</button>
    </form>
@endsection