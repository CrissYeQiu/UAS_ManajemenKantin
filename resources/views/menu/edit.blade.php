@extends('layouts.app')

@section('judul','Edit Menu')

@section('konten')

<div class="card">

    <div class="card-header">

        <h5>Edit Menu</h5>

    </div>

    <form action="{{ route('menu.update',$menu->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="card-body">

            <div class="mb-3">

                <label>Nama Menu</label>

                <input
                    type="text"
                    name="nama_menu"
                    class="form-control"
                    value="{{ old('nama_menu',$menu->nama_menu) }}">

            </div>

            <div class="mb-3">

                <label>Jenis</label>

                <select name="jenis" class="form-control">

                    <option value="makanan"
                        {{ $menu->jenis=='makanan'?'selected':'' }}>

                        Makanan

                    </option>

                    <option value="minuman"
                        {{ $menu->jenis=='minuman'?'selected':'' }}>

                        Minuman

                    </option>

                </select>

            </div>

            <div class="mb-3">

                <label>Harga</label>

                <input
                    type="number"
                    name="harga"
                    class="form-control"
                    value="{{ old('harga',$menu->harga) }}">

            </div>

            <div class="mb-3">

                <label>Deskripsi</label>

                <textarea
                    name="deskripsi"
                    class="form-control">{{ old('deskripsi',$menu->deskripsi) }}</textarea>

            </div>

            <div class="mb-3">

                <label>Status</label>

                <select name="status" class="form-control">

                    <option value="1"
                        {{ $menu->status ? 'selected' : '' }}>

                        Tersedia

                    </option>

                    <option value="0"
                        {{ !$menu->status ? 'selected' : '' }}>

                        Habis

                    </option>

                </select>

            </div>

        </div>

        <div class="card-footer">

            <button class="btn btn-warning">

                Update

            </button>

            <a href="{{ route('menu.index') }}"
                class="btn btn-secondary">

                Kembali

            </a>

        </div>

    </form>

</div>

@endsection