<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = ['id', 'admin_id', 'nama', 'email', 'kata_sandi','admin_id'];
}
