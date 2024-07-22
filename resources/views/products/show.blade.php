<x-app-layout>
    <div class="container mx-auto py-8 max-w-screen-lg">
        <h1 class="text-3xl mb-4"><b>Porduct Name:</b> {{ $product->name }}</h1>
        <div class="bg-white p-4 rounded-lg ">
            <p class="text-gray-600">{{ $product->description }}</p>
            <p class="mt-2 text-green-600 font-bold">${{ $product->price }}</p>
            <div class="mt-4">
                <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-500 hover:underline ml-2">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>