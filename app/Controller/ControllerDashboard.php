<?php 

namespace app\Controller;
use app\Core\View;
// use app\Model\Peserta;

class ControllerDashboard{

	public function __construct(){
		
	}

	function index(){
		View::render('dashboard/home');
	}
	
	function event(){
		View::render('dashboard/event');
	}

	function tambahEvent(){
		View::render('dashboard/tambah-event');
	}

	function detailEvent(){
		View::render('dashboard/detail-event');
	}

	function peserta(){
		View::render('dashboard/peserta');
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