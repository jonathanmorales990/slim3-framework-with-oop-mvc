<?php 
	
use Slim\Views\PhpRenderer;

$container = $app->getContainer();

$container['renderer'] = function ($container) {

	return new PhpRenderer("./app/views");

};

