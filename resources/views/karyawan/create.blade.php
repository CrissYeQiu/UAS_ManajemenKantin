@extends('layouts.app')

@section('judul', 'Tambah Karyawan')

@section('konten')

<div class="card shadow-sm border-0">

    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Form Tambah Karyawan</h5>
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

    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf

        <div class="card-body">

            {{-- NAMA --}}
            <div class="mb-3">
                <label class="form-label">Nama Karyawan</label>
                <input type="text"
                       name="name"
                       class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name') }}"
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
                       value="{{ old('email') }}"
                       placeholder="Masukkan email aktif">

                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- PASSWORD --}}
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password"
                       name="password"
                       class="form-control @error('password') is-invalid @enderror"
                       placeholder="Masukkan password">

                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('karyawan.index') }}" class="btn btn-outline-secondary">
                Kembali
            </a>

            <button type="submit" class="btn btn-primary">
                Simpan Karyawan
            </button>
        </div>

    </form>

</div>

@endsection