<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HakAkses extends Model
{
    use HasFactory;
    protected $table = 'hak_akses';
    protected $fillable = ['jabatan_id','akses_id'];

    public function jabatan()
    {
        return $this->belongsToMany(Jabatan::class, 'hak_hak_akses', 'hak_akses_id', 'jabatan_id');
    }

    public function akses()
    {
        return $this->belongsTo(Akses::class, 'akses_id');
    }
}
