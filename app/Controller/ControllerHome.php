<?php 

namespace app\Controller;
use app\Core\View;
use app\Model\User;
use app\Model\Event;
use app\Model\Peserta;

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
		session_start();

			$id_user = $_SESSION['id'];
	        $event = Event::find($id_event);
			$events = Event::orderBy('created_at', 'desc')->offset(0)->limit(4)->get();

			$cekdaftar = Peserta::where([
			    ['id_event', $id_event],
			    ['id_user', $id_user]
			])->get();

		View::render('Detail-event',[
            'detailEvent' => $event,
            'events' => $events,
            'cekdaftar' => $cekdaftar
        ]);
    }
	
	// Menampilkan halaman daftar
	function daftar(){
		View::render('Daftar');
	}

	// Menampilkan halaman event
	function event(){
		$event = Event::orderBy('created_at', 'desc')->offset(0)->limit(4)->get();
		$data = [
			'events' => $event
		];
		View::render('Event', $data);
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
				$_SESSION['pesan'] = "Gagal. Email sudah terdaftar";
			}
		} else{
			$_SESSION['type'] = "danger";
			$_SESSION['pesan'] = "Gagal. Form isian tidak boleh kosong";
		}
		
    	header('Location: '.base_url.'home/daftar');
	}

	// Daftar event
	function prosesDaftarEvent(){
		session_start();
		$event = $_POST['event'];
		$input = ([
    		'id_event' => $event,
    		'id_user' => $_SESSION['id'],
    		'status' => '1'
    	]);

		// Cek submit
		if (isset($_POST['daftarEvent'])) {
	    	Peserta::create($input);
			$_SESSION['pesansukses'] = "Sukses. Daftar event berhasil";
		} else{
			$_SESSION['type'] = "danger";
			$_SESSION['pesan'] = "Gagal. Akses ilegal";
			// echo "gagal";
		}
		
    	header('Location: '.base_url.'home/detailEvent/'.$event);
	}
}
