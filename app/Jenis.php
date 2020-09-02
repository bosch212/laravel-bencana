<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'jenis_bencana';
    protected $primaryKey = 'id_jenis_bencana';
    protected $keyType= 'string';
    protected $fillable = ['id_jenis_bencana', 'nama_bencana'];

    public function bencana()
    {
        return $this->hasMany(App\Bencana::class, 'id_jenis_bencana', 'id_jenis_bencana');
    }

    public function kerusakan()
    {
        return $this->hasMany(App\Kerusakan::class, 'id_jenis_bencana', 'id_jenis_bencana');
    }

    public function posko()
    {
        return $this->hasMany(App\Posko::class, 'id_jenis_bencana', 'id_jenis_bencana');
    }

    public function korban()
    {
        return $this->hasMany(App\Korban::class, 'id_jenis_bencana', 'id_jenis_bencana');
    }
}

