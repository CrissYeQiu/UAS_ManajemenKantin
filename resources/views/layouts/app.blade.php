<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="padding: 20px">

<div class="wrapper">

    @include('layouts/partials.sidebar')

    <div class="main">

        @include('layouts/partials.header')

        @yield('konten')

        @include('layouts/partials.footer')

    </div>

</div>

<script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>