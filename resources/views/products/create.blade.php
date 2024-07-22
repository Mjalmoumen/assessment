<x-app-layout>
    <div class="container mx-auto py-8 max-w-screen-lg">
        <h1 class="text-3xl font-bold mb-4">Add New Product</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block font-semibold">Product Name</label>
                <input type="text" id="name" name="name" class="border rounded-lg px-3 py-2 w-full">
            </div>

            <div class="mb-4">
                <label for="description" class="block font-semibold">Description</label>
                <textarea id="description" name="description" rows="4" class="border rounded-lg px-3 py-2 w-full"></textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block font-semibold">Price</label>
                <input type="number" id="price" name="price" step="0.01" class="border rounded-lg px-3 py-2 w-full">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Add Product</button>
        </form>
    </div>
</x-app-layout>