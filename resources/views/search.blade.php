<x-app-layout>
     {{-- <form action="{{ route('mypackage.search') }}" method="GET" class="max-w-xs mx-auto"> --}}
    <form action="{{ route('search') }}" method="GET" class="max-w-xs mx-auto">
        <div class="mb-4">
            <label for="query" class="block text-gray-700 text-sm font-bold mb-2">Search products</label>
            <input
                id="query"
                type="text"
                name="query"
                placeholder="Enter a product name or description"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            >
        </div>
        <button
            type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
        >
            Search
        </button>
    </form>
    @if (isset($results) && $results->count() > 0)
    <div class="mt-4 mx-auto max-w-screen-lg">
        <h2 class="text-lg font-semibold mb-2">Search Results</h2>
        <ul class="list-disc pl-6">
            @foreach ($results as $result)
                <li>
                    <a href="{{ route('products.show', $result->id) }}" class="text-blue-500 hover:underline">{{ $result->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    @else
        <p class="mt-4 text-gray-600">No results found.</p>
    @endif
</x-app-layout> 