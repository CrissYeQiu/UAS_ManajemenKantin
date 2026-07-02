<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Luminthue's</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        
    </style>

</head>
<body>

<div class="container-fluid">
    <a href="/" class="back-home">
        <i class="bi bi-arrow-left"></i>
        <span>Kembali ke Landing Page</span>
    </a>
    <div class="row login-container">

        <!-- LEFT -->

        <div class="col-lg-6 left-side">

            <div class="left-content">

                <div class="brand">
                    ✨ Luminthue's
                </div>

                <h1>
                    Selamat Datang<br>
                    Kembali!
                </h1>

                <p>
                    Masuk ke akun Anda untuk melanjutkan
                    dan menikmati seluruh fitur sistem
                    manajemen Luminthue's.
                </p>

            </div>

        </div>

        <!-- RIGHT -->

        <div class="col-lg-6 right-side">
            <div class="login-box">

                <div class="login-icon">
                    🔒
                </div>

                <h2 class="text-center fw-bold">
                    Masuk Ke Sistem
                </h2>

                <p class="text-center text-muted mb-4">
                    Silakan login untuk melanjutkan
                </p>

                @if(session('sukses'))
                    <div class="alert alert-success">
                        {{ session('sukses') }}
                    </div>
                @endif

                @error('login_error')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

                <form action="{{ route('login.auth') }}" method="POST">

                    @csrf

                    <div class="mb-3">

                        <label>Email</label>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email') }}"
                            placeholder="Masukkan email"
                            required
                        >

                    </div>

                    <div class="mb-4">

                        <label>Password</label>

                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Masukkan password"
                            required
                        >

                    </div>

                    <button class="btn btn-primary btn-login w-100">
                        Masuk Ke Sistem
                    </button>

                </form>

                <hr class="my-4">

                <p class="text-center">

                    Belum memiliki akun?

                    <a href="{{ route('register') }}" class="text-decoration-none fw-bold">
                        Daftar Sekarang
                    </a>

                </p>

            </div>

        </div>

    </div>

</div>

</body>
</html>