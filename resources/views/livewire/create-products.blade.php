<div class="max-w-lg p-8 mx-auto mt-3 bg-white rounded-lg shadow-lg">
    <h2 class="mb-6 text-3xl font-extrabold text-center text-gray-900">Create New Product</h2>

     @if (session()->has('message'))
        <div class="p-4 mb-4 text-sm text-green-800 bg-green-100 border border-green-200 rounded-md">
            {{ session('message') }}
        </div>
        @endif

        <form wire:submit.prevent="store">


            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-semibold text-gray-700">Product Name</label>
                <input type="text" id="name" wire:model="name"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Enter product name">
                @error('name')
                    <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-5">
                <label for="description" class="block mb-2 text-sm font-semibold text-gray-700">Description</label>
                <textarea id="description" wire:model="description"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    rows="4" placeholder="Enter product description"></textarea>
                @error('description')
                    <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-5">
                <label for="price" class="block mb-2 text-sm font-semibold text-gray-700">Price ($)</label>
                <input type="number" id="price" wire:model="price"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Enter product price">
                @error('price')
                    <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>


            <div class="flex justify-center mb-6">
                <button type="submit"
                    class="inline-flex items-center px-6 py-2 text-sm font-semibold tracking-wide text-white uppercase transition-all bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 disabled:opacity-50">Create
                    Product</button>
            </div>

        </form>
        <div class="text-center">
            <a href="/product" class="text-sm font-medium text-indigo-600 hover:underline hover:text-indigo-800">Show
                All Products</a>
        </div>
</div>
