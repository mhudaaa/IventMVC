<?php 

namespace app\Controller;
use app\Core\View;
use app\Model\Peserta;

class ControllerHome{

	function index(){
		$peserta = Peserta::all();

		$data = [
			'a' => "ini data tes",
			'peserta' => $peserta
		];

		View::render('Home', $data);
	}
}
