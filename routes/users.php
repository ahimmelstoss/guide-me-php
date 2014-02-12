<?php

$app->get('/users/:id', function($id) use ($entityManager, $app) {
  $user = $entityManager->find("User", (int)$id);

  $tpl = $app->view;
  $tpl->user = $user;
  $tpl->display('views/users/show.tpl.php');
});

$app->get('/signup', function() use($app) {
  $tpl = $app->view;
  $tpl->display('views/users/new.tpl.php');
});

$app->post('/signup', function() use($entityManager, $app) {
  $signupData = $app->request->post();
  if (!isset($signupData["name"]) && !isset($signupData["email"]) && !isset($signupData["password"]) && !isset($signupData["password_confirmation"])):
  elseif (isset($signupData["name"]) && isset($signupData["email"]) && isset($signupData["password"]) && isset($signupData["password_confirmation"]) && $signupData["password"] == $signupData["password_confirmation"]):
    $user = new User();
    $user->setName($signupData["name"]);
    $user->setEmail($signupData["email"]);
    $user->setPassword($signupData["password"]);
    $entityManager->persist($user);
    $entityManager->flush();
    $app->request->setSession("user_id", $user->getId());
    session_write_close();
    $app->redirect('/topics');
  endif;
});