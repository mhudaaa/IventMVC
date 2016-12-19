<?php 

namespace app\Controller;

use app\Core\View;
use app\Model\User;
use app\Model\Event;
use app\Model\Peserta;

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
		$event = Event::where('event_organizer', $id)->orderBy('created_at', 'desc')->get();

		$data = [
			'user' => $user,
			'events' => $event
		];
		View::render('dashboard/home', $data);
	}
	
	function event(){
		$id = $_SESSION['id'];
		$user = User::findOrFail($id);
		$event = Peserta::where('id_user', $id)->orderBy('created_at', 'desc')->get();
		$data = [
			'user' => $user,
			'events' => $event
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

	function tambahPoster(){
		$id = $_SESSION['id'];
		$user = User::findOrFail($id);
		$data = [
			'user' => $user
		];
		View::render('dashboard/tambah-poster', $data);	
	}

	function detailEvent($id_event){
		$id = $_SESSION['id'];
		$user = User::findOrFail($id);

		$event = Event::find($id_event);
		$data = [
			'detailEvent' => $event,
			'user' => $user
		];
		View::render('dashboard/detail-event', $data);
	}

	function detailEventPeserta($id_event){
		$id = $_SESSION['id'];
		$user = User::findOrFail($id);

		$event = Event::find($id_event);
		$data = [
			'detailEvent' => $event,
			'user' => $user
		];
		View::render('dashboard/detail-event-user', $data);
	}

	function peserta($id_event){
		$id = $_SESSION['id'];
		$user = User::findOrFail($id);

		$event = Event::find($id_event);
		$peserta = Peserta::where('id_event', $id_event)->get();
				
		$data = [
			'event' => $event,
			'pesertas' => $peserta,
			'user' => $user
		];
		View::render('dashboard/peserta', $data);
	}

	function pesertaDownload($id_event){
		$id = $_SESSION['id'];
		$user = User::findOrFail($id);

		$event = Event::find($id_event);
		$peserta = Peserta::where('id_event', $id_event)->get();
				
		$data = [
			'event' => $event,
			'pesertas' => $peserta,
			'user' => $user
		];
		View::render('dashboard/pesertaFile', $data);
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
		$now = date("Y-m-d");
		$date = $_POST['tgl_event'];
		$selisih = ((abs(strtotime ($now) - strtotime ($date)))/(60*60*24));;
		
		if ($date < $now) {
			$_SESSION['type'] = "danger";
			$_SESSION['pesan'] = "Gagal. Tanggal event tidak bisa sebelum hari ini";
			header('Location: '.base_url.'dashboard');
		} else{	
			if ($selisih > 90) {
				$_SESSION['type'] = "danger";
				$_SESSION['pesan'] = "Gagal. Tanggal event tidak boleh lebih 90 hari dari hari ini.";
				header('Location: '.base_url.'dashboard');
			} else{
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
		    		'persetujuan_peserta' 	=> 0,
		    		'poster' 				=> null
		    	]);
				
		    	$event = Event::create($input);
		    	$id_event = $event->id_event;
		    	$_SESSION['id_event'] = $id_event;
		        header('Location: '.base_url.'dashboard/tambahPoster/'.$id_event);
		    }
		}

		
	}

	function prosesTambahPoster(){
		$id_event = $_POST['id_event'];
		$event = Event::find($id_event);
		$nama_file = $_FILES['gambar']['name'];
		$ukuran_file = $_FILES['gambar']['size'];
		$tipe_file = $_FILES['gambar']['type'];
		$tmp_file = $_FILES['gambar']['tmp_name'];

		$path = "upload/".$nama_file;

    	if($tipe_file == "image/jpeg" || $tipe_file == "image/jpg" || $tipe_file == "image/png"){
    		if($ukuran_file <= 100000000){
    			if(move_uploaded_file($tmp_file, $path)){
					
					$event->poster = $nama_file;
					
					if ($event->update()) {
						$_SESSION['type'] = "success";
						$_SESSION['pesan'] = "Event berhasil dibuat";
					} else{
						$_SESSION['type'] = "danger";
						$_SESSION['pesan'] = "Gagal. Gagal masuk ke database";
					}
				} else{
					$_SESSION['type'] = "danger";
					$_SESSION['pesan'] = "Gagal. Gambar gagal diunggah";
				}
			} else{
				$_SESSION['type'] = "danger";
				$_SESSION['pesan'] = "Gagal. Ukuran gambar melebihi kapasitas";
			}
		} else{
			$_SESSION['type'] = "danger";
			$_SESSION['pesan'] = "Gagal. Format gambar tidak didukung";
		}
		
    	
        header('Location: '.base_url.'dashboard');
	}

	function pdf(){
		View::render('dashboard/pdf');
	}
}