<div class="w-full py-10 bg">
    <h1 class="text-3xl text-center ">All Products</h1>
    {{-- success message --}}
    @if (session()->has('message'))
        <div class="p-2 mb-4 text-green-800 bg-green-100 rounded">
            {{ session('message') }}
        </div>
    @endif

    <div class="py-3 text-center">
        <a href="/product/create">
            <button class="p-2 mr-5 text-white bg-green-500 rounded-xl">Add Products</button>
        </a>


    </div>
    <div class="flex items-center justify-center">
        <table class="w-4/5 bg-white border border-collapse table-auto border-slate-400">
            <thead class="bg-slate-300">
                <tr>
                    <th class="px-4 py-2 text-left border border-slate-400">#</th>
                    <th class="px-4 py-2 text-left border border-slate-400">Name</th>
                    <th class="px-4 py-2 text-left border border-slate-400">Description</th>
                    <th class="px-4 py-2 text-left border border-slate-400">Price</th>
                    <th class="px-4 py-2 text-left border border-slate-400">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="hover:bg-slate-100">
                        <td class="px-4 py-2 border border-slate-400">{{ $product->id }}</td>
                        <td class="px-4 py-2 border border-slate-400">{{ $product->name }}</td>
                        <td class="px-4 py-2 border border-slate-400">{{ $product->description }}</td>
                        <td class="px-4 py-2 border border-slate-400">${{ number_format($product->price, 2) }}</td>
                        <td class="flex px-4 py-2 space-x-4 border border-slate-400 ">

                            <form wire:submit='goto({{ $product->id }})'>
                                <button class="p-2 text-white bg-blue-600 rounded hover:bg-blue-700">Update</button>
                            </form>
                            <button wire:click='DeleteProduct({{ $product->id }})'
                                class="p-2 text-white bg-red-600 rounded hover:bg-red-700">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
