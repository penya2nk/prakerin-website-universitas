<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
     protected $table = 'berandas';
    protected $fillable = ['sejarah','visi','misi','tujuan','alamat','no_telepon'];
    public $timestamps = true;

}
