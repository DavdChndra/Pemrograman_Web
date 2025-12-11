<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
<body class="d-flex flex-column min-vh-100">
    @include('includes.header', ['class' => 'header']) 

    @include('includes.navbar')

    <main class="container mt-4 mb-5 flex-grow-1">
        @include('includes.messages')
        
        @yield('content')
    </main>

    @include('includes.footer', ['class' => 'footer'])

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>