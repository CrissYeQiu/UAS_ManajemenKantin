<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('judul')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<div class="wrapper">

    @include('layouts/partials.sidebar')

    <div class="main">

        @include('layouts/partials.header')

        @yield('konten')

        @include('layouts/partials.footer')

    </div>

</div>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>