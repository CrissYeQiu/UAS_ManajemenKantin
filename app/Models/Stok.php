<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $fillable = [
        'user_id',
        'nama_bahan',
        'jumlah',
        'satuan',
        'jenis_pengajuan',
        'alasan',
        'tanggal_pengajuan',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}