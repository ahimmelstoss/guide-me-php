<?php 

require_once "vendor/autoload.php";
require_once "bootstrap.php";

$app = new \Slim\Slim();

require './routes/topics.php';
require './routes/users.php';
require './routes/suggestions.php';
require './routes/sessions.php';
require './routes/tags.php';
require './routes/welcome.php';
require './routes/pages.php';

$app->run();
?>