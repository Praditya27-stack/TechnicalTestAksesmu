<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
    <input class="shadow appearance-none border @error('name') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" id="name" name="name" type="text" value="{{ old('name', $product->name ?? '') }}" required maxlength="100">
    @error('name')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
</div>

<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
    <textarea class="shadow appearance-none border @error('description') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" id="description" name="description" rows="3">{{ old('description', $product->description ?? '') }}</textarea>
    @error('description')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
</div>

<div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="price">Price</label>
        <input class="shadow appearance-none border @error('price') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" id="price" name="price" type="number" step="0.01" value="{{ old('price', $product->price ?? '') }}" required>
        @error('price')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
    </div>
    <div class="w-full md:w-1/2 px-3">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="stock">Stock</label>
        <input class="shadow appearance-none border @error('stock') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" id="stock" name="stock" type="number" value="{{ old('stock', $product->stock ?? 0) }}" required>
        @error('stock')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
    </div>
</div>
