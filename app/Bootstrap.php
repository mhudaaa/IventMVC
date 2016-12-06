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
		// echo $url;

		$file = '\\app\\Controller\\Controller'.$urls[1];
		$controller = new $file;
		$controller->{$urls[2]}();
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
