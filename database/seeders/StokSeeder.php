<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stok;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        Stok::create([
            'user_id' => 1,
            'nama_bahan' => 'Beras',
            'jumlah' => 10,
            'satuan' => 'kg',
            'jenis_pengajuan' => 'stok_masuk',
            'alasan' => 'Stok awal sistem',
            'tanggal_pengajuan' => now(),
            'status' => 'disetujui',
        ]);

        Stok::create([
            'user_id' => 2,
            'nama_bahan' => 'Ayam',
            'jumlah' => 5,
            'satuan' => 'kg',
            'jenis_pengajuan' => 'pembelian_bahan',
            'alasan' => 'Untuk menu hari ini',
            'tanggal_pengajuan' => now(),
            'status' => 'pending',
        ]);
    }
}