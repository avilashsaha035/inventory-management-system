<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inventory Management System</title>

        <!-- Toastr CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

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
                    <a href="{{ route('expenses.create') }}" class="text-white hover:text-gray-200">Expenses</a>
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

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- Toastr JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "timeOut": "3000"
            };

            @if(session('success'))
                toastr.success("{{ session('success') }}");
            @endif

            @if(session('error'))
                toastr.error("{{ session('error') }}");
            @endif

            @if(session('warning'))
                toastr.warning("{{ session('warning') }}");
            @endif

            @if(session('info'))
                toastr.info("{{ session('info') }}");
            @endif
        </script>

    </body>
</html>
