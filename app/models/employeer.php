<?php 

namespace app\models;

class employeer {

	private $name;

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}
}

?>