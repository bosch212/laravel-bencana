<?php

namespace App;
use App\Jenis;
use App\Detail_Kerusakan;
use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    protected $table = 'kerusakan';
    protected $primaryKey='id_kerusakan';
    protected $keyType= 'string';
    protected $fillable = ['id_kerusakan', 'id_jenis_bencana', 'wilayah','berat', 'sedang', 'ringan','kesehatan', 'peribadahan', 'pendidikan'];

    public function jenis_bencana()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis_bencana', 'id_jenis_bencana');
    }

    public function detail_kerusakan()
    {
        return $this->hasMany(App\Detail_Kerusakan::class, 'id_kerusakan', 'id_kerusakan');
    }
}
