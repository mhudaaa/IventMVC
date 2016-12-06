<?php

namespace app\Core;

class View {

	public static function render($file, $data = []){
		extract($data);
		require_once('views/'.$file.'.php');
	}
}