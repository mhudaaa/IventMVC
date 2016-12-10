<?php

namespace app\Model;
use Illuminate\Database\Eloquent\Model;

class User extends Model{

	protected $table = 'tb_user';
	protected $primaryKey = 'id_user';

	protected $fillable = ['nama', 'email', 'telp', 'password'];
	// public $timestamps = false;

	public function scopeCoba($query) {
		return $query->where('id_user', 1);
	}

}