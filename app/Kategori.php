<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    //
    protected $fillable = [
        'nama_kategori', 'gambar_kategori', 'deskripsi_kategori',
    ];
    public function reseps()
    {

        return $this->hasMany(Resep::class);
    }
}
