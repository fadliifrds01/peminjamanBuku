<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    public $timestamps = false;

    protected $fillable = [
        'gambar_buku',
        'judul_buku',
        'pengarang_buku',
        'penerbit_buku',
        'tahun_terbit',
        'status_buku',
        'created_by',
        'updated_by',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_buku');
    }
}
