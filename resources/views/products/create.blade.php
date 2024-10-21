
@extends('layout')

@section('content')
    <h1>Add Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price">
        <button type="submit">Add</button>
    </form>
@endsection