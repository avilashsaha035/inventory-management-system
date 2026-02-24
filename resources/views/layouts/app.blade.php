<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('products.index') }}" class="text-white font-bold text-lg">
                Inventory Management System
            </a>
            <div class="space-x-4">
                <a href="{{ route('products.index') }}" class="text-white hover:text-gray-200">Products</a>
                <a href="{{ route('sales.create') }}" class="text-white hover:text-gray-200">Sales</a>
                <a href="{{ route('report.index') }}" class="text-white hover:text-gray-200">Reports</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto mt-6 px-4 flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4 text-center mt-auto">
        <p>&copy; {{ date('Y') }} Inventory Management System. All rights reserved.</p>
    </footer>

</body>
</html>
