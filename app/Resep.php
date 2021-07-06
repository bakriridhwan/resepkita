<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    //
    //
    protected $table = 'reseps';
    protected $fillable = [
        'id', 'user_id', 'judul', 'gambar', 'bahan', 'alat', 'langkah', 'keterangan', 'arsip', 'kategori_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
