@extends('layouts.app')

@section('judul', 'Data Pengajuan Stok')

@section('konten')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Pengajuan Stok Bahan</h4>

    <a href="{{ route('stok.create') }}" class="btn btn-primary">
        + Tambah Pengajuan
    </a>
</div>

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Karyawan</th>
            <th>Nama Bahan</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Jenis</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th style="width: 180px;">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse($pengajuan as $key => $p)
        <tr>
            <td>{{ $key + 1 }}</td>

            <td>{{ $p->user->name ?? '-' }}</td>

            <td>{{ $p->nama_bahan }}</td>
            <td>{{ $p->jumlah }}</td>
            <td>{{ $p->satuan }}</td>
            <td>{{ $p->jenis_pengajuan }}</td>
            <td>{{ $p->tanggal_pengajuan }}</td>

            <td>
                @if($p->status == 'pending')
                    <span class="badge bg-warning">Pending</span>
                @elseif($p->status == 'disetujui')
                    <span class="badge bg-success">Disetujui</span>
                @else
                    <span class="badge bg-danger">Ditolak</span>
                @endif
            </td>

            <td>
                <a href="{{ route('stok.edit', $p->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('stok.destroy', $p->id) }}"
                      method="POST"
                      class="d-inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Hapus data ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="9" class="text-center">Data belum tersedia</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection