<?php 

require_once "vendor/autoload.php";
require_once "bootstrap.php";

$app = new \Slim\Slim();

$app->view = new Savant3();

session_cache_limiter(false);
session_start();

$app->request = new \GuideMe\Request($app->environment);

$app->hook('slim.before', function() use($entityManager, $app) {
  $tpl = $app->view;
  $id = $app->request->session('user_id');
  if ($id):
    $tpl->user = $entityManager->find("User", (int)$id);
  endif;
});

require './routes/topics.php';
require './routes/users.php';
require './routes/suggestions.php';
require './routes/sessions.php';
require './routes/tags.php';
require './routes/welcome.php';
require './routes/pages.php';

$app->run();
?>