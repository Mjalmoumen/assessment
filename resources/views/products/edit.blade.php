<x-app-layout>
    <div class="container mx-auto py-8 max-w-screen-lg">
        <h1 class="text-3xl font-bold mb-4">Edit Product</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block font-semibold">Product Name</label>
                <input type="text" id="name" name="name" value="{{ $product->name }}" class="border rounded-lg px-3 py-2 w-full">
            </div>

            <div class="mb-4">
                <label for="description" class="block font-semibold">Description</label>
                <textarea id="description" name="description" rows="4" class="border rounded-lg px-3 py-2 w-full">{{ $product->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block font-semibold">Price</label>
                <input type="number" id="price" name="price" value="{{ $product->price }}" step="0.01" class="border rounded-lg px-3 py-2 w-full">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Update Product</button>
        </form>
    </div>
</x-app-layout>