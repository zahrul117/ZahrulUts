<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama', 'nim', 'kelas', 'prodi_id', 'angkatan'];

    public function prodi(){
        return $this->belongsTo(prodi::class, 'prodi_id');
    }
}
