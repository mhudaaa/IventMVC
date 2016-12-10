<?php 

namespace app\Controller;
use app\Core\View;
use app\Model\User;
use app\Model\Event;

class ControllerHome{

	public function __construct(){
		
	}

	function index(){
		$event = Event::orderBy('created_at', 'desc')->offset(0)->limit(4)->get();
		$data = [
			'events' => $event
		];
		View::render('Home', $data);
	}
	public function detailEvent($id_event){
        $event = Event::find($id_event);
		$events = Event::orderBy('created_at', 'desc')->offset(0)->limit(4)->get();
		View::render('Detail-event',[
            'detailEvent' => $event,
            'events' => $events
        ]);
    }
	
	function daftar(){
		View::render('Daftar');
	}

	function event(){
		View::render('Event');
	}

	function login(){
		View::render('Login');
	}

	function prosesDaftar(){
		session_start();
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$telp = $_POST['telp'];

		$input = ([
    		'nama' => $nama,
    		'email' => $email,
    		'password' => $password,
    		'telp' => $telp
    	]);

    	if(User::create($input)){
	    	$_SESSION['pesan'] = "Daftar berhasil";
    	} else{
	    	$_SESSION['pesan'] = "Daftar gagal";
	    }
    	header('Location: '.base_url.'home/daftar');
	}

	// function data(){
	// 	$peserta = Peserta::all();

	// 	$data = [
	// 		'a' => "ini data tes",
	// 		'peserta' => $peserta
	// 	];

	// 	View::render('Home', $data);
	// }
}
