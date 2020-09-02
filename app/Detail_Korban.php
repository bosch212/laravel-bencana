<?php

namespace App;
use App\Korban;
use Illuminate\Database\Eloquent\Model;

class Detail_Korban extends Model
{
    protected $table = 'detail_korban';
    protected $primaryKey='id_detail_korban';
    protected $keyType= 'string';
    protected $fillable = ['id_detail_korban', 'id_korban', 'nama_korban', 'jenis_korban','jenis_kelamin', 'usia', 'keterangan'];

    public function korban()
    {
        return $this->belongsTo(Korban::class, 'id_korban', 'id_korban');
    }
}
