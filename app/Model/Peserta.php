<?php

namespace app\Model;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model{

	protected $table = 'tb_peserta';
	protected $primaryKey = 'id_peserta';

	public $timestamps = false;
}