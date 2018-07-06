<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelembagaan extends Model
{
     protected $table = 'kelembagaans';
protected $fillable = ['nama','deskripsi','kategori_id'];
public $timestamp = true;

public function Kategori()
{
	return $this->belongsTo('App\Kategori','kategori_id');
}
}
