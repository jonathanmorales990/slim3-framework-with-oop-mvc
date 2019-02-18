<?php 
	
use Slim\Views\PhpRenderer;

$container = $app->getContainer();

$container['views'] = function ($container) {

	return new PhpRenderer("./app/views");

};

