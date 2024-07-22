<x-app-layout>
    <div class="container mx-auto py-8 max-w-screen-lg ">
        <h1 class="text-3xl font-bold mb-4">Product List</h1>
        <a href="{{ route('products.create') }}" class="text-blue-500 hover:underline ml-2">Add New Product</a>
        <div class="grid grid-cols-1 gap-4 ">
            @foreach ($products as $product)
                <div class="bg-white p-4 rounded-lg shadow-md ">
                    <h2 class="text-lg font-semibold">{{ $product->name }}</h2>
                    <p class="text-gray-600">{{ $product->description }}</p>
                    <p class="mt-2 text-green-600 font-bold">${{ $product->price }}</p>
                    <div class="mt-4">
                        <a href="{{ route('products.show', $product->id) }}" class="text-blue-500 hover:underline">View</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-500 hover:underline ml-2">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
