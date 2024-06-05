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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>