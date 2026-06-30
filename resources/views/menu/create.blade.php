@extends('layouts.app')

@section('judul','Tambah Menu')

@section('konten')

<div class="card">

    <div class="card-header">

        <h5>Tambah Menu</h5>

    </div>

    <form action="{{ route('menu.store') }}" method="POST">

        @csrf

        <div class="card-body">

            <div class="mb-3">

                <label>Nama Menu</label>

                <input type="text"
                    name="nama_menu"
                    class="form-control"
                    value="{{ old('nama_menu') }}">

            </div>

            <div class="mb-3">

                <label>Jenis</label>

                <select name="jenis" class="form-control">

                    <option value="">Pilih Jenis</option>

                    <option value="makanan">Makanan</option>

                    <option value="minuman">Minuman</option>

                </select>

            </div>

            <div class="mb-3">

                <label>Harga</label>

                <input type="number"
                    name="harga"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Deskripsi</label>

                <textarea
                    name="deskripsi"
                    class="form-control"></textarea>

            </div>

            <div class="mb-3">

                <label>Status</label>

                <select name="status" class="form-control">

                    <option value="1">Tersedia</option>

                    <option value="0">Habis</option>

                </select>

            </div>

        </div>

        <div class="card-footer">

            <button class="btn btn-primary">

                Simpan

            </button>

            <a href="{{ route('menu.index') }}"
                class="btn btn-secondary">

                Kembali

            </a>

        </div>

    </form>

</div>

@endsection