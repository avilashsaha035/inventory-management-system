@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-full max-w-xl">

            <h2 class="mb-6 text-center text-2xl font-semibold text-gray-800">
                New Sale
            </h2>

            <div class="rounded-lg bg-white p-6 shadow-sm">

                <form method="POST" action="{{ route('sales.store') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label for="product_id" class="mb-1 block text-sm font-medium text-gray-700">
                            Product
                        </label>
                        <select
                            id="product_id"
                            name="product_id"
                            required
                            class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm
                                   focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
                        >
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">
                                    {{ $product->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="quantity" class="mb-1 block text-sm font-medium text-gray-700">
                            Quantity
                        </label>
                        <input
                            id="quantity"
                            type="number"
                            name="quantity"
                            required
                            min="1"
                            class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm
                                   focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
                        >
                    </div>

                    <div>
                        <label for="discount" class="mb-1 block text-sm font-medium text-gray-700">
                            Discount
                        </label>
                        <input
                            id="discount"
                            type="number"
                            name="discount"
                            step="0.01"
                            value="0"
                            class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm
                                   focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
                        >
                    </div>

                    <div>
                        <label for="customer_payment" class="mb-1 block text-sm font-medium text-gray-700">
                            Customer Payment
                        </label>
                        <input
                            id="customer_payment"
                            type="number"
                            name="customer_payment"
                            step="0.01"
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
                            Submit
                        </button>

                        <a href="{{ route('sales.index') }}"
                           class="self-center text-sm font-medium text-gray-600 hover:text-gray-800">
                            Cancel
                        </a>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
