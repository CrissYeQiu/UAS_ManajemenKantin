@extends('layouts.app')

@section('judul', 'Edit Pengajuan Stok')

@section('konten')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Pengajuan Stok</h3>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger m-3">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('stok.update', $pengajuan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card-body">

            <!--pilih user -->
            <div class="form-group mb-3">
                <label>Karyawan</label>
                <select name="karyawan_id" class="form-control">
                    @foreach($users as $u)
                        <option value="{{ $u->id }}">
                            {{ $u->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- nama bahan -->
            <div class="form-group mb-3">
                <label>Nama Bahan</label>
                <input type="text"
                       name="nama_bahan"
                       class="form-control"
                       value="{{ $pengajuan->nama_bahan }}">
            </div>

            <!-- jumah -->
            <div class="form-group mb-3">
                <label>Jumlah</label>
                <input type="number"
                       name="jumlah"
                       class="form-control"
                       value="{{ $pengajuan->jumlah }}">
            </div>

            <!-- satuan -->
            <div class="form-group mb-3">
                <label>Satuan</label>
                <select name="satuan" class="form-control">
                    <option value="kg" {{ $pengajuan->satuan == 'kg' ? 'selected' : '' }}>Kg</option>
                    <option value="liter" {{ $pengajuan->satuan == 'liter' ? 'selected' : '' }}>Liter</option>
                    <option value="pcs" {{ $pengajuan->satuan == 'pcs' ? 'selected' : '' }}>Pcs</option>
                    <option value="pack" {{ $pengajuan->satuan == 'pack' ? 'selected' : '' }}>Pack</option>
                </select>
            </div>

            <!-- jenis  -->
            <div class="form-group mb-3">
                <label>Jenis Pengajuan</label>
                <select name="jenis_pengajuan" class="form-control">
                    <option value="stok_masuk" {{ $pengajuan->jenis_pengajuan == 'stok masuk' ? 'selected' : '' }}>
                        Stok Masuk
                    </option>
                    <option value="stok_habis" {{ $pengajuan->jenis_pengajuan == 'stok habis' ? 'selected' : '' }}>
                        Stok Habis
                    </option>
                    <option value="pembelian_bahan" {{ $pengajuan->jenis_pengajuan == 'pembelian bahan' ? 'selected' : '' }}>
                        Pembelian
                    </option>
                </select>
            </div>

            <!-- alasan -->
            <div class="form-group mb-3">
                <label>Alasan</label>
                <textarea name="alasan" class="form-control" rows="3">{{ $pengajuan->alasan }}</textarea>
            </div>

            <!-- status -->
            <div class="form-group mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="pending" {{ $pengajuan->status == 'pending' ? 'selected' : '' }}>
                        Pending
                    </option>
                    <option value="disetujui" {{ $pengajuan->status == 'disetujui' ? 'selected' : '' }}>
                        Disetujui
                    </option>
                    <option value="ditolak" {{ $pengajuan->status == 'ditolak' ? 'selected' : '' }}>
                        Ditolak
                    </option>
                </select>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('stok.index') }}" class="btn btn-secondary">Kembali</a>
        </div>

    </form>
</div>

@endsection