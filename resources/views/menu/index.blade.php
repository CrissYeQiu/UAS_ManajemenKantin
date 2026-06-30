@extends('layouts.app')

@section('judul','Data Menu')

@section('konten')

<div class="d-flex justify-content-between mb-3">
    <h4>Data Menu</h4>

    <a href="{{ route('menu.create') }}" class="btn btn-primary">
        + Tambah Menu
    </a>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered table-hover">

    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Menu</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Status</th>
            <th width="170">Aksi</th>
        </tr>
    </thead>

    <tbody>

        @forelse($menu as $key => $m)

        <tr>
            <td>{{ $key+1 }}</td>

            <td>{{ $m->nama_menu }}</td>

            <td>{{ ucfirst($m->jenis) }}</td>

            <td>Rp {{ number_format($m->harga,0,',','.') }}</td>

            <td>

                @if($m->status)

                    <span class="badge bg-success">Tersedia</span>

                @else

                    <span class="badge bg-danger">Habis</span>

                @endif

            </td>

            <td>

                <a href="{{ route('menu.edit',$m->id) }}"
                    class="btn btn-warning btn-sm">

                    Edit

                </a>

                <form action="{{ route('menu.destroy',$m->id) }}"
                    method="POST"
                    class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Hapus menu?')">

                        Hapus

                    </button>

                </form>

            </td>

        </tr>

        @empty

        <tr>

            <td colspan="6" class="text-center">

                Belum ada data.

            </td>

        </tr>

        @endforelse

    </tbody>

</table>

@endsection