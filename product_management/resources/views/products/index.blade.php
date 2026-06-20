@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Products</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Add New Product
    </a>
</div>

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="min-w-full leading-normal">
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Price</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Stock</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->id }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap font-semibold">{{ $product->name }}</p>
                    <p class="text-gray-500 whitespace-no-wrap text-xs">{{ Str::limit($product->description, 50) }}</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">Rp {{ number_format($product->price, 2, ',', '.') }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->stock }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                    <a href="{{ route('products.edit', $product->id) }}" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this product?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center text-gray-500">No products found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
        {{ $products->links() }}
    </div>
</div>
@endsection
