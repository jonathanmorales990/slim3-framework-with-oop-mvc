<?php 

namespace app\controller;

use app\models\employeer as employeer;

final class HomeController {


	private $container;


	function __construct($container){

		$this->container = $container;
	}

	public function index( $request, $response){
		$employeer = new employeer();
		
		$employeer->setName('John Doe');

	 	$vars['employeer'] = $employeer->getName();

	 	return $this->container->renderer->render($response, "home.php", $vars);
	}

}

?>