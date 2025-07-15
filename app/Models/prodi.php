<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    protected $table = 'prodi';
    protected $fillable = ['nama', 'fakultas'];

    public function mahasiswas()
    {
        return $this->hasMany(mahasiswa::class, 'prodi_id');
    }
}
