<?php 

namespace app\Controller;

use app\Core\View;
use app\Model\User;
use app\Model\Event;

class ControllerDashboard{


	public function __construct(){
		session_start();
		if (!isset($_SESSION['email']) && !isset($_SESSION['id'])){
			header('Location: '.base_url);
		}
	}

	function index(){
		$id = $_SESSION['id'];
		$user = User::findOrFail($id);
		$event = Event::orderBy('created_at', 'desc')->get();
		$data = [
			'user' => $user,
			'events' => $event
		];
		View::render('dashboard/home', $data);
	}
	
	function event(){
		$id = $_SESSION['id'];
		$user = User::findOrFail($id);
		$data = [
			'user' => $user
		];
		View::render('dashboard/event', $data);
	}

	function tambahEvent(){
		$id = $_SESSION['id'];
		$user = User::findOrFail($id);
		$data = [
			'user' => $user
		];
		View::render('dashboard/tambah-event', $data);
		
	}

	function detailEventUser(){
		$id = $_SESSION['id'];
		$user = User::findOrFail($id);
		$data = [
			'user' => $user
		];
		View::render('dashboard/detail-event-user', $data);
	}

	function peserta(){
		$id = $_SESSION['id'];
		$user = User::findOrFail($id);
		$data = [
			'user' => $user
		];
		View::render('dashboard/peserta', $data);
	}

	function profil(){
		$id = $_SESSION['id'];
		$user = User::findOrFail($id);
		$jmlEvent = Event::count();
		$data = [
			'user' => $user,
			'jmlEvent' => $jmlEvent
		];
		View::render('dashboard/profil', $data);
	}

	function ubahProfil(){
		$id = $_SESSION['id'];
		$user = User::findOrFail($id);
		$data = [
			'user' => $user
		];
		View::render('dashboard/ubah-profil', $data);
		
	}

	function prosesUbahProfil($id_user){
		$user = User::find($id_user);
		$user->nama = $_POST['nama'];
		$user->email = $_POST['email'];
		$user->telp = $_POST['telp'];
		$user->organisasi = $_POST['organisasi'];
        if($user->update()){
        	$_SESSION['pesan'] = "Profil berhasil diubah.";
        }
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