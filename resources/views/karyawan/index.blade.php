@extends('layouts.app')

@section('judul', 'Data Karyawan')

@section('konten')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Data Karyawan</h4>

    <a href="{{ route('karyawan.create') }}" class="btn btn-primary">
        + Tambah Karyawan
    </a>
</div>

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th style="width: 60px;">No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal Daftar</th>
            <th style="width: 180px;">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse($karyawan as $key => $k)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $k->name }}</td>
            <td>{{ $k->email }}</td>
            <td>{{ $k->created_at->format('d-m-Y') }}</td>

            <td>
                <a href="{{ route('karyawan.edit', $k->id) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('karyawan.destroy', $k->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">Data belum tersedia</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection