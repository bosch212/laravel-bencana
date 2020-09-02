<?php

namespace App;

use App\Kerusakan;
use Illuminate\Database\Eloquent\Model;

class Detail_Kerusakan extends Model
{
    protected $table = 'detail_kerusakan';
    protected $primaryKey='id_detail_kerusakan';
    protected $keyType= 'string';
    protected $fillable = ['id_detail_kerusakan', 'id_kerusakan', 'nama', 'jenis_kerusakan_rumah','keterangan'];

    public function kerusakan()
    {
        return $this->belongsTo(Kerusakan::class, 'id_kerusakan', 'id_kerusakan');
    }
}
