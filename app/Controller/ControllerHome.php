<?php 

namespace app\Controller;
use app\Core\View;
use app\Model\User;
use app\Model\Event;

class ControllerHome{

	public function __construct(){
		
	}

	// Menampilkan halaman home dengan daftar event
	function index(){
		// Menampilkan 4 event terakhir terurut berdasarkan tanggal paling baru
		$event = Event::orderBy('created_at', 'desc')->offset(0)->limit(4)->get();
		$data = [
			'events' => $event
		];
		View::render('Home', $data);
	}

	// Menampilkan rincian event
	public function detailEvent($id_event){
        $event = Event::find($id_event);
		$events = Event::orderBy('created_at', 'desc')->offset(0)->limit(4)->get();
		View::render('Detail-event',[
            'detailEvent' => $event,
            'events' => $events
        ]);
    }
	
	// Menampilkan halaman daftar
	function daftar(){
		View::render('Daftar');
	}

	// Menampilkan halaman event
	function event(){
		View::render('Event');
	}

	// Menampilkan halaman login
	function login(){
		View::render('Login');
	}

	// Melakukan proses pendaftaran
	function prosesDaftar(){
		session_start();

		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$repassword = md5($_POST['repassword']);
		$telp = $_POST['telp'];

		// mencari email di daftar user
		$cekEmail = User::where('email', $email)->get();

		// Cek isian form
		if (isset($nama) && isset($email) && isset($password) && isset($repassword) && isset($telp)) {

			// Cek apakah email sudah terdaftar
			if ($cekEmail->count() == 0) {

				// cek apa isian password sudah sama 
				if ($password === $repassword) {
					$input = ([
			    		'nama' => $nama,
			    		'email' => $email,
			    		'password' => $password,
			    		'telp' => $telp,
			    		'organisasi' => "-"
			    	]);

					// kondisi jika inputan benar
			    	if(User::create($input)){
						$_SESSION['type'] = "success";
				    	$_SESSION['pesan'] = "Daftar berhasil, silahkan login";
			    	} else{
						$_SESSION['type'] = "danger";
				    	$_SESSION['pesan'] = "Daftar gagal";
				    }
				} else{
					$_SESSION['type'] = "danger";
					$_SESSION['pesan'] = "Daftar Gagal. Password harus sama";
				}
			} else{
				$_SESSION['type'] = "danger";
				$_SESSION['pesan'] = "Gagal. Email sudah digunakan";
			}
		} else{
			$_SESSION['type'] = "danger";
			$_SESSION['pesan'] = "Gagal. Form isian tidak boleh kosong";
		}
		
    	header('Location: '.base_url.'home/daftar');
	}
}
