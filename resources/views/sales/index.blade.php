@extends('layouts.app')

@section('content')

    <!-- Page Header -->
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">
            Sales
        </h2>

        <a href="{{ route('sales.create') }}"
           class="inline-flex items-center justify-center rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 transition">
            + New Sale
        </a>
    </div>

    <!-- Table Wrapper -->
    <div class="overflow-x-auto rounded-lg bg-white shadow-sm">
        <table class="min-w-full divide-y divide-gray-200">

            <!-- Table Head -->
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Product</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Quantity</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Discount</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">VAT</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Total Amount</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Payment</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Due</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Date</th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody class="divide-y divide-gray-100 bg-white">
                @forelse ($sales as $sale)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $sale->id }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $sale->product->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $sale->quantity }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $sale->discount }} TK</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $sale->vat }} TK</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $sale->total_amount }} TK</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $sale->customer_payment }} TK</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $sale->due_amount }} TK</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $sale->sale_date }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="px-6 py-10 text-center text-sm text-gray-500">
                            No sales recorded yet.
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>

@endsection
