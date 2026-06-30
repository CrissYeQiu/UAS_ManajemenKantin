<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stok;
use App\Models\User;

class StokController extends Controller
{
    public function index()
    {
        $pengajuan = Stok::with('user')->latest()->get();
        return view('stok.index', compact('pengajuan'));
    }

    public function create()
    {
        $users = User::all();
        return view('stok.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'nama_bahan' => 'required',
            'jumlah' => 'required|numeric',
            'satuan' => 'required',
            'jenis_pengajuan' => 'required',
            'tanggal_pengajuan' => 'required',
        ]);

        Stok::create([
            'user_id' => $request->user_id,
            'nama_bahan' => $request->nama_bahan,
            'jumlah' => $request->jumlah,
            'satuan' => $request->satuan,
            'jenis_pengajuan' => $request->jenis_pengajuan,
            'alasan' => $request->alasan,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'status' => 'pending',
        ]);

        return redirect()->route('stok.index')
                         ->with('success', 'Pengajuan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pengajuan = Stok::findOrFail($id);
        $users = User::all();;

        return view('stok.edit', compact('pengajuan', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'karyawan_id' => 'required',
            'nama_bahan' => 'required',
            'jumlah' => 'required|numeric',
            'satuan' => 'required',
            'jenis_pengajuan' => 'required',
        ]);

        $pengajuan = Stok::findOrFail($id);

        $pengajuan->update([
            'user_id' => $request->karyawan_id,
            'nama_bahan' => $request->nama_bahan,
            'jumlah' => $request->jumlah,
            'satuan' => $request->satuan,
            'jenis_pengajuan' => $request->jenis_pengajuan,
            'alasan' => $request->alasan,
            'status' => $request->status,
        ]);

        return redirect()->route('stok.index')
                         ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $pengajuan = Stok::findOrFail($id);
        $pengajuan->delete();

        return redirect()->route('stok.index')
                         ->with('success', 'Data berhasil dihapus');
    }
}