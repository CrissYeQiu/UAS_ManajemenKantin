<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi | Waroeng Luminthue's</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/daftar.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>

<a href="/" class="back-home">
    <i class="bi bi-arrow-left"></i>
    <span>Kembali ke Landing Page</span>
</a>

<div class="container-fluid">

    <div class="row register-container">

        <!-- KIRI -->
        <div class="col-lg-6 left-side">

            <div class="left-content">

                <div class="brand">
                    🍽️ Waroeng Luminthue's
                </div>

                <h1>
                    Bergabung<br>
                    Bersama Kami
                </h1>

                <p>
                    Daftarkan akun Anda untuk mulai mengelola
                    data kantin, menu, stok, transaksi,
                    dan seluruh aktivitas Waroeng Luminthue's.
                </p>

            </div>

        </div>

        <!-- KANAN -->
        <div class="col-lg-6 right-side">

            <div class="register-box">

                <div class="register-icon">
                    <i class="bi bi-person-plus-fill"></i>
                </div>

                <h2 class="text-center fw-bold">
                    Registrasi Akun
                </h2>

                <p class="text-center text-muted mb-4">
                    Lengkapi data berikut untuk membuat akun baru.
                </p>

                <form action="{{ route('register.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label>Nama Lengkap</label>

                        <input type="text"
                               name="name"
                               value="{{ old('name') }}"
                               class="form-control @error('name') is-invalid @enderror"
                               placeholder="Masukkan nama lengkap"
                               required>

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="mb-3">

                        <label>Email</label>

                        <input type="email"
                               name="email"
                               value="{{ old('email') }}"
                               class="form-control @error('email') is-invalid @enderror"
                               placeholder="Masukkan email"
                               required>

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="mb-3">

                        <label>Password</label>

                        <input type="password"
                               name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Minimal 6 karakter"
                               required>

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="mb-4">

                        <label>Konfirmasi Password</label>

                        <input type="password"
                               name="password_confirmation"
                               class="form-control"
                               placeholder="Ulangi password"
                               required>

                    </div>

                    <button class="btn btn-success btn-register w-100">
                        Daftar Sekarang
                    </button>

                </form>

                <hr>

                <p class="text-center mb-0">

                    Sudah memiliki akun?

                    <a href="{{ route('login') }}" class="fw-bold text-decoration-none">
                        Masuk di sini
                    </a>

                </p>

            </div>

        </div>

    </div>

</div>

</body>
</html>