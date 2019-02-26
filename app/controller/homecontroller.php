<?php 

namespace app\controller;

use app\models\employeer as employeer;

final class HomeController {


	private $container;


	function __construct($container){

		$this->container = $container;
	}

	public function index( $request, $response){
		$employeer = new employeer('John Doe');

	 	$vars['employeer'] = $employeer->getName();

	 	return $this->container->views->render($response, "home.php", $vars);
	}

}

?>