<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '/vendor/autoload.php';

$app = new \Slim\App;
/* 
$app = new \Slim\App(['settings' => ['displayErrorDetails' => true]]);
use if you are using xampp and slim without command line
*/
require 'app/containers.php';
require 'app/routes.php';

$app->run();