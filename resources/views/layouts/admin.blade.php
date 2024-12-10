<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .sidebar {
            height: 100vh;
            background-color: #1f2937;
            color: white;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            color: #10b981; /* Tailwind Emerald for hover effect */
        }

        .content-wrapper {
            margin-left: 250px; /* Sidebar width */
        }
    </style>

    @livewireStyles
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="d-flex">
        <nav class="sidebar position-fixed w-100 p-4">
            <h2 class="text-white mb-4">Admin Panel</h2>
            <ul class="list-unstyled">
                <li class="mb-2">
                    <a href="{{ route('home') }}" class="d-block py-2">Dashboard</a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('blogs.index') }}" class="d-block py-2">Manage Blogs</a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('blogs.create') }}" class="d-block py-2">Create Blog</a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('logout') }}" class="d-block py-2 text-danger">Logout</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="content-wrapper w-100">
            <header class="bg-white shadow-sm py-3 px-4 border-bottom">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="h4 mb-0">@yield('header', 'Welcome to Admin Panel')</h1>
                    <span class="text-muted">{{ Auth::user()->name ?? 'Admin' }}</span>
                </div>
            </header>

            <main class="p-4">
                @yield('content')
            </main>
        </div>
    </div>

    @livewireScripts
</body>
</html>
