<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" class="dark">

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>@yield('title', config('app.name', 'Herritage Peneleh'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <style>
        .nav-pills .nav-link {
            color: white;
        }

        .nav-pills .nav-link.active {
            background-color: transparent;
            /* Change this to your desired color */
            color: orange;
            /* Change this to your desired text color */
        }

        .montserrat {
            font-family: 'Montserrat', sans-serif;
            color: white;
        }

        .poppins {
            font-family: 'Poppins', sans-serif;
            color: white;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            /* Example gradient from pink to orange */
            background-size: cover;
            background-position: center;
            position: relative;
            z-index: 1;
        }

        .gradient-overlay {
            background: rgba(0, 0, 0, 0.3);
            /* Semi-transparent black overlay */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
        }

    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-900 text-gray-100">
    <div class="min-h-screen bg-gray-900">
        @include('layouts.navbar')
        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
