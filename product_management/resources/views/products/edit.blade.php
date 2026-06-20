@extends('layouts.app')

@section('content')
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-2xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Product</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('products._form', ['product' => $product])
        <div class="flex items-center justify-between mt-6">
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Update Product</button>
            <a href="{{ route('products.index') }}" class="text-gray-600 hover:text-gray-800">Cancel</a>
        </div>
    </form>
</div>
@endsection
