<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UTS PWEB')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    @include('partials.navbar')

    <div class="container mx-auto flex-1 p-4">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>
