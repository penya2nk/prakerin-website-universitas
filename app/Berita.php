<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
     protected $table = 'beritas';
protected $fillable = ['foto','judul','tgl_publikasi','deskripsi','kategori_id'];
public $timestamp = true;

public function Kategori()
{
	return $this->belongsTo('App\Kategori','kategori_id');
}
}
