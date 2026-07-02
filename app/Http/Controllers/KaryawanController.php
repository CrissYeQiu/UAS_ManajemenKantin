<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = User::oldest()->get();
        return view('karyawan.index', compact('karyawan'));
    }

    // tambah karyawan
    public function create()
    {
        return view('karyawan.create');
    }

    // menyimpanan karyawan
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('karyawan.index')
            ->with('success', 'Karyawan berhasil ditambahkan');
    }

    // Edit data
    public function edit($id)
    {
        $karyawan = User::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    // Update Data Kryawan
    public function update(Request $request, $id)
    {
        $karyawan = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $karyawan->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        if ($request->password) {
            $karyawan->update([
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect()->route('karyawan.index')
            ->with('success', 'Data berhasil diupdate');
    }

    // Menghapus karyawan
    public function destroy($id)
    {
        $karyawan = User::findOrFail($id);
        $karyawan->delete();

        return redirect()->route('karyawan.index')
            ->with('success', 'Karyawan berhasil dihapus');
    }
}