<?php 

namespace app\Controller;
use app\Core\View;
// use app\Model\Peserta;

class ControllerHome{

	public function __construct(){
		
	}

	function index(){
		View::render('Home');
	}
	
	function daftar(){
		View::render('Daftar');
	}

	function login(){
		View::render('Login');
	}

	function data(){
		$peserta = Peserta::all();

		$data = [
			'a' => "ini data tes",
			'peserta' => $peserta
		];

		View::render('Home', $data);
	}
}
