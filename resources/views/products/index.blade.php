@extends('layouts.app')

@section('content')

    <!-- Page Header -->
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">
            Products
        </h2>

        <a href="{{ route('products.create') }}"
           class="inline-flex items-center justify-center rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 transition">
            + Add Product
        </a>
    </div>

    <div class="overflow-x-auto rounded-lg bg-white shadow-sm">
        <table class="min-w-full border-collapse divide-y divide-gray-200">

            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Purchase Price</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Sell Price</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Opening Stock</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Created At</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100 bg-white">
                @forelse ($products as $product)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $product->id }}</td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-800">{{ $product->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $product->purchase_price }} TK</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $product->sell_price }} TK</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $product->opening_stock }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">
                            {{ $product->created_at->format('d M Y') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-10 text-center text-sm text-gray-500">
                            No products found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
