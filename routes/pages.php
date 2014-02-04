<?php

$app->get('/about', function() {
  $tpl = new Savant3();
  $tpl->display('views/about.tpl.php');
});

$app->get('/contact', function() {
  $tpl = new Savant3();
  $tpl->display('views/contact.tpl.php');
});