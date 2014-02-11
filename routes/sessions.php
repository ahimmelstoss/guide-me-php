<?php

$app->get('/login', function () use($entityManager) {
});

$app->get('/logout', function() use($app) {
  session_destroy();
  session_write_close();
  $app->redirect('/topics');
});