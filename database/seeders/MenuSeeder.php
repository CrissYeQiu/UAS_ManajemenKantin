<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        Menu::create([
            'nama_menu' => 'Nasi Goreng Ayam',
            'jenis' => 'makanan',
            'harga' => 12000,
            'deskripsi' => 'Nasi goreng dengan ayam suwir dan telur',
            'status' => true,
        ]);
        
        Menu::create([
            'nama_menu' => 'Es Teh Manis',
            'jenis' => 'minuman',
            'harga' => 5000,
            'deskripsi' => 'Teh dingin manis segar',
            'status' => true,
        ]);
    }
}