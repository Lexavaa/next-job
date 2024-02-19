<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = 'jabatan';

    // Menentukan relasi One-to-Many dengan model HakAkses
    public function hakAkses()
    {
        return $this->hasMany(HakAkses::class, 'jabatan_id')->orderBy('akses_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'jabatan_id', 'id');
    }
   
    public function akses()
    {
        return $this->belongsToMany(Akses::class, 'hak_akses', 'jabatan_id', 'akses_id');
    }
}
