<?php

namespace app\Model;
use Illuminate\Database\Eloquent\Model;

class Event extends Model{

	protected $table = 'tb_event';
	protected $primaryKey = 'id_event';

	protected $fillable = ['event_organizer', 'nama_event', 'deskripsi', 'waktu_mulai', 'waktu_selesai', 'tempat', 'kota', 'email', 'website','jml_peserta', 'persetujuan_peserta', 'htm', 'tgl_event', 'poster'];

}