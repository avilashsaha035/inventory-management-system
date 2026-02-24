@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-full max-w-xl">

            <h2 class="mb-6 text-center text-2xl font-semibold text-gray-800">
                Add Product
            </h2>

            <div class="rounded-lg bg-white p-6 shadow-sm">

                <form method="POST" action="{{ route('products.store') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label for="name" class="mb-1 block text-sm font-medium text-gray-700">
                            Name
                        </label>
                        <input
                            id="name"
                            type="text"
                            name="name"
                            required
                            class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm
                                   focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
                        >
                    </div>

                    <div>
                        <label for="purchase_price" class="mb-1 block text-sm font-medium text-gray-700">
                            Purchase Price
                        </label>
                        <input
                            id="purchase_price"
                            type="number"
                            name="purchase_price"
                            step="0.01"
                            required
                            class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm
                                   focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
                        >
                    </div>

                    <div>
                        <label for="sell_price" class="mb-1 block text-sm font-medium text-gray-700">
                            Sell Price
                        </label>
                        <input
                            id="sell_price"
                            type="number"
                            name="sell_price"
                            step="0.01"
                            required
                            class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm
                                   focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
                        >
                    </div>

                    <div>
                        <label for="opening_stock" class="mb-1 block text-sm font-medium text-gray-700">
                            Opening Stock
                        </label>
                        <input
                            id="opening_stock"
                            type="number"
                            name="opening_stock"
                            required
                            class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm
                                   focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
                        >
                    </div>

                    <div class="flex justify-center gap-3 pt-4">
                        <button
                            type="submit"
                            class="rounded-md bg-blue-600 px-6 py-2.5
                                   text-sm font-medium text-white hover:bg-blue-700 transition"
                        >
                            Save
                        </button>

                        <a href="{{ route('products.index') }}"
                           class="self-center text-sm font-medium text-gray-600 hover:text-gray-800">
                            Cancel
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
