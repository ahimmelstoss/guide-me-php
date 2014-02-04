<?php

$app->get('/users/:id', function($id) use ($entityManager) {
  $user = $entityManager->find("User", (int)$id);

  $tpl = new Savant3();
  $tpl->user = $user;
  $tpl->display('views/users/show.tpl.php');
});