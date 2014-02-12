<?php

$app->get('/', function() use($app) {
  $tpl = $app->view;
  $tpl->display('views/index.tpl.php');
});