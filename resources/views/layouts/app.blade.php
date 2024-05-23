<!DOCTYPE html>
<html>
<head>
    <title>My Laravel App</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />
    <div class="content">
        @yield('content')
    </div>
</body>
</html>