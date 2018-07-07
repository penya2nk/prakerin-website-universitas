<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
      protected $table = 'program_studis';
protected $fillable = ['nama','judul','deskripsi','kategori_id'];
public $timestamp = true;

public function Kategori()
{
	return $this->belongsTo('App\Kategori','kategori_id');
}
}
