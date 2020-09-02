<?php

namespace App;
use App\Jenis;
use Illuminate\Database\Eloquent\Model;

class Bencana extends Model
{
    protected $table = 'bencana';
    protected $primaryKey='id_bencana';
    protected $keyType= 'string';
    protected $fillable = ['id_bencana','id_jenis_bencana','tanggal','foto_bencana','waktu', 'wilayah', 'koordinat','penyebab', 'kronologi','nama_pelapor','lat','lng','no_hp'];

    public function jenis_bencana()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis_bencana', 'id_jenis_bencana');
    }
}
