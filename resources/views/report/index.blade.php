@extends('layouts.app')

@section('content')

    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">
            Financial Report
        </h2>
    </div>

    <!-- Date Filter -->
    <div class="mb-6 rounded-lg bg-white p-5 shadow-sm">
        <form method="GET"
              action="{{ route('report.index') }}"
              class="flex flex-col gap-4 sm:flex-row sm:items-end">

            <div class="w-full sm:w-auto">
                <label for="from" class="mb-1 block text-sm font-medium text-gray-700">
                    From Date
                </label>
                <input
                    type="date"
                    id="from"
                    name="from"
                    value="{{ $from }}"
                    class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm
                           focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
                >
            </div>

            <div class="w-full sm:w-auto">
                <label for="to" class="mb-1 block text-sm font-medium text-gray-700">
                    To Date
                </label>
                <input
                    type="date"
                    id="to"
                    name="to"
                    value="{{ $to }}"
                    class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm
                           focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
                >
            </div>

            <div>
                <button
                    type="submit"
                    class="inline-flex items-center justify-center rounded-md bg-blue-600
                           px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-700 transition"
                >
                    Filter
                </button>
            </div>

        </form>
    </div>

    <!-- Summary Cards -->
    <div class="mb-6 grid grid-cols-1 gap-6 sm:grid-cols-2">

        <div class="rounded-lg border border-green-300 bg-green-50 p-5">
            <h3 class="text-sm font-medium text-green-700">
                Total Sales
            </h3>
            <p class="mt-1 text-2xl font-semibold text-green-800">
                {{ $totalSell }} TK
            </p>
        </div>

        <div class="rounded-lg border border-red-300 bg-red-50 p-5">
            <h3 class="text-sm font-medium text-red-700">
                Total Expenses
            </h3>
            <p class="mt-1 text-2xl font-semibold text-red-800">
                {{ $totalExpense }} TK
            </p>
        </div>

    </div>

    <!-- Sales Table -->
    <div class="overflow-x-auto rounded-lg bg-white shadow-sm">
        <table class="min-w-full divide-y divide-gray-200">

            <!-- Table Head -->
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Product</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Sale Amount</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Payment</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Due</th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody class="divide-y divide-gray-100 bg-white">
                @forelse ($sales as $sale)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 text-sm text-gray-700">
                            {{ $sale->sale_date }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-700">
                            {{ $sale->product->name }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-700">
                            {{ $sale->total_amount }} TK
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-700">
                            {{ $sale->customer_payment }} TK
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-700">
                            {{ $sale->due_amount }} TK
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center text-sm text-gray-500">
                            No sales found for this period.
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>

@endsection
