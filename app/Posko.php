<?php

namespace App;
use App\Jenis;
use Illuminate\Database\Eloquent\Model;

class Posko extends Model
{
    protected $table = 'posko';
    protected $primaryKey='id_posko';
    protected $keyType= 'string';
    protected $fillable = ['id_posko', 'id_jenis_bencana','tanggal','nama_posko','wilayah', 'foto_posko', 'keterangan'];

    public function jenis_bencana()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis_bencana', 'id_jenis_bencana');
    }
}
