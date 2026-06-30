<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Luminthue's</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <a href="/"
        class="btn btn-outline-secondary btn-sm position-absolute m-3"
        style="top: 0; left: 0;">
            Kembali ke Landing Page
    </a>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow mt-5">
                <div class="card-header bg-primary text-white text-center">
                    <h5 class="mb-0 py-1">Masuk Ke Sistem</h5>
                </div>
                <div class="card-body p-4">
                    @if(session('sukses'))
                        <div class="alert alert-success py-2 small">{{ session('sukses') }}</div>
                    @endif
 
                    @error('login_error')
                        <div class="alert alert-danger py-2 small">{{ $message }}</div>
                    @enderror
 
                    <form action="{{ route('login.auth') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label small">Alamat Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small">Kata Sandi</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mb-2">Masuk Ke Sistem</button>
                        <p class="text-center small mb-0">Belum memiliki akun? <a href="{{ route('register') }}">Daftar Sekarang</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>