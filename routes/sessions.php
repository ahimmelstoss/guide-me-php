<?php

$app->get('/login', function () use($app) {
  $tpl = $app->view;
  $tpl->display('views/sessions/new.tpl.php'); 
});

$app->post('/login', function () use($entityManager, $app) {
  // if ($app->request->isXhr()):
    $loginData = $app->request->post();
    if (!isset($loginData["email"]) && !isset($loginData["password"])):
    elseif (isset($loginData["email"]) && isset($loginData["password"])):
      $email = $loginData["email"];
      $user = $entityManager->getRepository('User')->findOneBy(array('email' => $email));
      if ($user && $loginData["password"] == $user->getPassword()):
        $app->request->setSession("user_id", $user->getId());
        session_write_close();
        $app->redirect('/topics');
      endif;
    endif;
});

$app->get('/logout', function() use($app) {
  session_destroy();
  session_write_close();
  $app->redirect('/topics');
});