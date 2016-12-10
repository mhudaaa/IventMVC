<?php 

require_once(__DIR__.'/../vendor/autoload.php');
define('base_url', 'http://localhost/mvc/');

class Bootstrap{

	function __construct(){
		$this->db();
		$url = $_SERVER['PHP_SELF'];
		$url = substr($url, strpos($url, 'index.php') + 9);

		$urls = explode('/', $url);
		// print_r($urls);

        // echo "$file";
        if(empty($urls[1])){
            $file = '\\app\\Controller\\ControllerHome';
			$controller = new $file;
			$controller->index();
        } else{
	        $file = 'app/Controller/Controller'.$urls[1].'.php';
	        if(file_exists($file)){
	            $a = "\\app\\Controller\\Controller".$urls[1];
	            $controller = new $a;
	            if(isset($urls[1])){
	                if(isset($urls[3])){
	                    $controller->{$urls[2]}($urls[3]);
	                }if(isset($urls[2])){
	                    $controller->{$urls[2]}($urls[2]);
	                }else{
	                    // $controller->{$urls[1]}();
		                $controller->index();
	                    // echo "tidak ada method";
	                }
	            }else{
	            	// ke default controller
		            $controller = new \app\Controller\ControllerHome();
	            }
	        }else{
	            $controller = new \app\Controller\ControllerError();
	            return false;
	        }
        }
	}

	function db(){
        $capsule = new Illuminate\Database\Capsule\Manager();
        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'db_ivent',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

		// Make this Capsule instance available globally via static methods
        $capsule->setAsGlobal();
		// Setup the Eloquent ORM
        $capsule->bootEloquent();
    }
}
