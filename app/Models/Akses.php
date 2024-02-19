<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akses extends Model
{
    use HasFactory;

    protected $table = 'akses';
    protected $fillable = ['user_id','akses_id'];

    public function jabatan()
    {
        return $this->belongsToMany(Jabatan::class, 'hak_akses', 'akses_id', 'jabatan_id');
    }
}
