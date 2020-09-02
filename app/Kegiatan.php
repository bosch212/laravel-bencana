<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey='id_kegiatan';
    protected $keyType= 'string';
    protected $fillable = ['id_kegiatan','nama_kegiatan','foto_kegiatan','keterangan'];
}
