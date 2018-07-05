<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
protected $fillable = ['nama'];
public $timestamp = true;

public function ProgramStudi()
{
	return $this->hasMany('App\ProgramStudi','kategori_id');
}
}
