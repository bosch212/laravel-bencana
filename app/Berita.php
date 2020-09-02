<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey='id_berita';
    protected $keyType= 'string';
    protected $fillable = ['id_berita','nama_berita','foto_berita','keterangan'];
}
