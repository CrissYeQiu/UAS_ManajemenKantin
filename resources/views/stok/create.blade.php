@extends('layouts.app')

@section('judul', 'Pengajuan Stok')

@section('konten')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Form Pengajuan Stok Bahan</h3>
    </div>

    {{-- ERROR VALIDATION --}}
    @if ($errors->any())
        <div class="alert alert-danger m-3">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('stok.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card-body">

        <!-- Peiliahn user -->
            <div class="form-group mb-3">
                <label>Karyawan</label>
                <select name="user_id" class="form-control">
                    <option value="">-- Pilih User --</option>
                    @foreach($users as $u)
                        <option value="{{ $u->id }}">
                            {{ $u->name }}
                        </option>
                    @endforeach

                </select>
            </div>

            <!-- Jenis pengajuan -->
            <div class="form-group mb-3">
                <label for="jenis_pengajuan">Jenis Pengajuan</label>
                <select name="jenis_pengajuan" id="jenis_pengajuan" class="form-control">
                    <option value="">-- Pilih Jenis --</option>
                    <option value="stok_masuk">Permintaan Stok Masuk</option>
                    <option value="stok_habis">Laporan Stok Habis</option>
                    <option value="pembelian_bahan">Pengajuan Pembelian Bahan</option>
                </select>
            </div>

            <!-- Bahan -->
            <div class="form-group mb-3">
                <label for="nama_bahan">Nama Bahan</label>
                <input type="text"
                       name="nama_bahan"
                       id="nama_bahan"
                       class="form-control"
                       placeholder="Contoh: Beras, Ayam, Minyak Goreng">
            </div>

            <!-- Jumlah -->
            <div class="form-group mb-3">
                <label for="jumlah">Jumlah</label>
                <input type="number"
                       name="jumlah"
                       id="jumlah"
                       class="form-control"
                       placeholder="Contoh: 10">
            </div>

            <!-- Satuan -->
            <div class="form-group mb-3">
                <label for="satuan">Satuan</label>
                <select name="satuan" id="satuan" class="form-control">
                    <option value="">-- Pilih Satuan --</option>
                    <option value="kg">Kg</option>
                    <option value="liter">Liter</option>
                    <option value="pcs">Pcs</option>
                    <option value="pack">Pack</option>
                </select>
            </div>

            <!-- Alasan -->
            <div class="form-group mb-3">
                <label for="alasan">Alasan Pengajuan</label>
                <textarea name="alasan"
                          id="alasan"
                          class="form-control"
                          rows="3"
                          placeholder="Contoh: stok hampir habis untuk operasional harian"></textarea>
            </div>

           <!-- tanggal penagujan -->
            <div class="form-group mb-3">
                <label for="tanggal_pengajuan">Tanggal Pengajuan</label>
                <input type="date"
                       name="tanggal_pengajuan"
                       id="tanggal_pengajuan"
                       class="form-control"
                       value="{{ date('Y-m-d') }}">
            </div>

        </div>


        <!-- tombol simpan dan keluar -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                Simpan Pengajuan
            </button>
            <a href="{{ route('stok.index') }}" class="btn border">
                Kembali
            </a>
        </div>

    </form>
</div>

{{-- PREVIEW FILE --}}
<script>
    const fileInput = document.getElementById('bukti');
    const preview = document.getElementById('preview-file');

    fileInput.addEventListener('change', function () {
        if (this.files.length > 0) {
            preview.innerHTML = "File dipilih: <b>" + this.files[0].name + "</b>";
        } else {
            preview.innerHTML = "";
        }
    });
</script>

@endsection