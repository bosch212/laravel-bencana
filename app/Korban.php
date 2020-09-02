<?php

namespace App;
use App\Jenis;
use App\Detail_Korban;
use Illuminate\Database\Eloquent\Model;

class Korban extends Model
{
    protected $table = 'korban';
    protected $primaryKey = 'id_korban';
    protected $keyType = 'string';
    protected $fillable = ['id_korban', 'id_jenis_bencana','wilayah','meninggal', 'luka_luka', 'kehilangan','terdampak'];

    public function jenis_bencana()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis_bencana', 'id_jenis_bencana');
    }

    public function detail_korban()
    {
        return $this->hasMany(App\Detail_Korban::class, 'id_korban', 'id_korban');
    }
}


