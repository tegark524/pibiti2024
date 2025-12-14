<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cashed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .navbar-brand {
            font-weight: 900;
            font-size: 1.5rem;
            color: #fff !important;
        }

        .navbar-nav .nav-link {
            font-weight: 600;
            margin: 0 10px;
            padding: 8px 16px;
            border-radius: 5px;
            color: #fff !important;
        }

        .nav-dashboard {
            color: #4285F4;
            /* Blue */
        }

        .nav-orders {
            color: #DB4437;
            /* Red */
        }

        .nav-categories {
            color: #F4B400;
            /* Yellow */
        }

        .nav-products {
            color: #0F9D58;
            /* Green */
        }

        .nav-users {
            color: #AB47BC;
            /* Purple */
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            font-weight: 600;
            transition: background-color 0.2s ease-in-out;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .navbar .text-white {
            margin-right: 20px;
            font-weight: 600;
        }

        .container h4 {
            font-weight: 700;
            font-size: 1.25rem;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-toggler {
            border-color: #343a40;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Cashed</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link nav-dashboard {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                    <a class="nav-link nav-orders {{ request()->routeIs('orders.index') ? 'active' : '' }}"
                        href="{{ route('orders.index') }}">
                        Orders
                    </a>
                    <a class="nav-link nav-categories {{ request()->routeIs('categories.index') ? 'active' : '' }}"
                        href="{{ route('categories.index') }}">
                        Categories
                    </a>
                    <a class="nav-link nav-products {{ request()->routeIs('products.index') ? 'active' : '' }}"
                        href="{{ route('products.index') }}">
                        Products
                    </a>
                    <a class="nav-link nav-users {{ request()->routeIs('users.index') ? 'active' : '' }}"
                        href="{{ route('users.index') }}">
                        Users
                    </a>
                </div>
            </div>

            <div class="d-flex align-items-center text-white">
                <i class="bi bi-person-circle me-2"></i>
                <div>{{ auth()->user()->name }}</div>
            </div>
            <form action="{{ route('logout') }}" method="post" class="ms-3">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </nav>

    @isset($title)
        <div class="border-bottom mb-3">
            <h4 class="container py-4">{{ $title }}</h4>
        </div>
    @endisset

    {{ $slot }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
