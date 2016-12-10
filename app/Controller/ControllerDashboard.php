<?php 

namespace app\Controller;

use app\Core\View;
use app\Model\User;
use app\Model\Event;

class ControllerDashboard{

	public function __construct(){
	}

	function index(){
		$user = User::coba()->get();
		$event = Event::orderBy('created_at', 'desc')->get();
		$data = [
			'users' => $user,
			'events' => $event
		];
		View::render('dashboard/home', $data);
	}
	
	function event(){
		$user = User::coba()->get();
		$data = [
			'users' => $user
		];
		View::render('dashboard/event', $data);
	}

	function tambahEvent(){
		$user = User::coba()->get();
		$data = [
			'users' => $user
		];
		View::render('dashboard/tambah-event', $data);
	}

	function detailEventUser(){
		$user = User::coba()->get();
		$data = [
			'users' => $user
		];
		View::render('dashboard/detail-event-user', $data);
	}

	function peserta(){
		$user = User::coba()->get();
		$data = [
			'users' => $user
		];
		View::render('dashboard/peserta', $data);
	}

	function profil(){
		$user = User::coba()->get();
		$jmlEvent = Event::count();
		$data = [
			'users' => $user,
			'jmlEvent' => $jmlEvent
		];
		View::render('dashboard/profil', $data);
	}

	function ubahProfil(){
		$user = User::coba()->get();
		$data = [
			'users' => $user
		];
		View::render('dashboard/ubah-profil', $data);
	}

	function prosesUbahProfil($id_user){
		$user = User::find($id_user);
		$user->nama = $_POST['nama'];
		$user->email = $_POST['email'];
		$user->telp = $_POST['telp'];
		$user->organisasi = $_POST['organisasi'];
        $user->update();
        header('Location: '.base_url.'dashboard/profil');
	}

	function prosesTambahEvent(){
		$input = ([
    		'event_organizer' 	 	=> $_POST['event_organizer'],
    		'nama_event' 		 	=> $_POST['nama_event'],
    		'deskripsi' 		 	=> $_POST['deskripsi'],
    		'tgl_event' 		 	=> $_POST['tgl_event'],
    		'waktu_mulai' 		 	=> $_POST['waktu_mulai'],
    		'waktu_selesai' 	 	=> $_POST['waktu_selesai'],
    		'tempat' 			 	=> $_POST['tempat'],
    		'kota' 			 	 	=> $_POST['kota'],
    		'email' 			 	=> $_POST['email'],
    		'website' 			 	=> $_POST['website'],
    		'jml_peserta' 		 	=> $_POST['jml_peserta'],
    		'htm' 				 	=> $_POST['htm'],
    		'persetujuan_peserta' 	=> 1,
    		'poster' 				=> $_POST['poster']
    	]);
		// print_r($input);
    	Event::create($input);
        header('Location: '.base_url.'dashboard');

	}
}