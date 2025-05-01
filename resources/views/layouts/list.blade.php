<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/flowbite.min.css">
    <script src="style/flowbite.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    @include('components.header')

    <div class="container mx-auto py-8">
        @yield('content')
    </div>

    @include('components.footer')
</body>
</html>