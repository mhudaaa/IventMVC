<?php

namespace app\Model;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model{

	protected $table = 'tb_peserta';
	protected $primaryKey = 'id_peserta';

	protected $fillable = ['id_event', 'id_user', 'status'];
	// public $timestamps = false;

	public function event(){
		return $this->belongsTo(Event::class, 'id_event');
	}

	public function user(){
		return $this->belongsTo(User::class, 'id_user');
	}

}