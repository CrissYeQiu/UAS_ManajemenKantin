@extends('layouts.app')

@section('judul', 'Edit Karyawan')

@section('konten')

<div class="card shadow-sm border-0">

    <div class="card-header bg-warning text-dark">
        <h5 class="mb-0">Form Edit Karyawan</h5>
    </div>

    {{-- ERROR VALIDASI --}}
    @if ($errors->any())
        <div class="alert alert-danger m-3">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card-body">

            {{-- NAMA --}}
            <div class="mb-3">
                <label class="form-label">Nama Karyawan</label>
                <input type="text"
                       name="name"
                       class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name', $karyawan->name) }}"
                       placeholder="Masukkan nama karyawan">

                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- EMAIL --}}
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email"
                       name="email"
                       class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email', $karyawan->email) }}"
                       placeholder="Masukkan email aktif">

                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- PASSWORD (OPTIONAL) --}}
            <div class="mb-3">
                <label class="form-label">Password Baru (opsional)</label>
                <input type="password"
                       name="password"
                       class="form-control @error('password') is-invalid @enderror"
                       placeholder="Kosongkan jika tidak diubah">

                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <div class="form-text">
                    Biarkan kosong jika tidak ingin mengganti password.
                </div>
            </div>

        </div>

        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('karyawan.index') }}" class="btn btn-outline-secondary">
                Kembali
            </a>

            <button type="submit" class="btn btn-warning">
                Update Karyawan
            </button>
        </div>

    </form>

</div>

@endsection