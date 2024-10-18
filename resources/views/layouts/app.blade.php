<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    
    @include('layouts.nav')
    
    <div class="flex-grow container mx-auto p-6 pt-24">
        @yield('content')
    </div>

    @include('layouts.footer')
    
</body>
</html>
