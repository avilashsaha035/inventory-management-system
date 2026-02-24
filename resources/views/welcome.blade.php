@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="container mx-auto px-4 py-16 text-center">
        <h1 class="mb-4 text-4xl font-semibold text-gray-800">
            Welcome to Inventory Management System
        </h1>

        <p class="mx-auto mb-8 max-w-2xl text-lg text-gray-600">
            Manage products, record sales, track expenses, and generate financial reports —
            all in one place.
        </p>

        <a href="{{ route('products.index') }}"
            class="inline-flex items-center rounded-lg bg-blue-600 px-6 py-3
                    text-sm font-medium text-white shadow hover:bg-blue-700 transition">
            Get Started
        </a>
    </section>

    <!-- Quick Links -->
    <section class="container mx-auto px-4 pb-16">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

            <a href="{{ route('products.index') }}"
                class="rounded-lg bg-white p-6 shadow-sm hover:shadow-md transition">
                <h2 class="mb-2 text-lg font-semibold text-gray-800">Products</h2>
                <p class="text-sm text-gray-600">
                    Add and manage your product catalog with purchase and sell prices.
                </p>
            </a>

            <a href="{{ route('sales.index') }}"
                class="rounded-lg bg-white p-6 shadow-sm hover:shadow-md transition">
                <h2 class="mb-2 text-lg font-semibold text-gray-800">Sales</h2>
                <p class="text-sm text-gray-600">
                    Record customer sales with discounts, VAT, and payments.
                </p>
            </a>

            <a href="{{ route('report.index') }}"
                class="rounded-lg bg-white p-6 shadow-sm hover:shadow-md transition">
                <h2 class="mb-2 text-lg font-semibold text-gray-800">Reports</h2>
                <p class="text-sm text-gray-600">
                    Generate date-wise financial reports for sales and expenses.
                </p>
            </a>

        </div>
    </section>
@endsection
