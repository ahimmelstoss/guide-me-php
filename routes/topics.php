<?php

$app->get('/topics', function() use($entityManager, $app) {

  $dql = "SELECT t, u FROM Topic t JOIN t.user u ORDER BY t.id DESC";

  $query = $entityManager->createQuery($dql);
  $topics = $query->getResult();

  $tpl = $app->view;
  $tpl->topics = $topics;
  $tpl->display('views/topics/index.tpl.php');

});

$app->get('/topics/:id', function($id) use($entityManager, $app) {

  $topic = $entityManager->find("Topic", (int)$id);

  $tpl = $app->view;
  $tpl->topic = $topic;
  $tpl->display('views/topics/show.tpl.php');

});

$app->post('/topics/new', function() use($entityManager, $app) {

  $topic = new Topic();
  $topic->setTitle($newTopicTitle);
  $topic->setDescription($newTopicDescription);
  $topic->setUser($user);

  $entityManager->persist($topic);
  $entityManager->flush();

  $tpl = $app->view;
  $tpl->topic = $topic;
  $tpl->display('views/topics/new.tpl.php');
  
  $app->redirect('/topics');
});

$app->post('/topics/:id/edit', function($id) use($entityManager, $app) {

  $topic = $entityManager->find("Topic", (int)$id);
  $topic = new Topic();
  $topic->setTitle($newTopicTitle);
  $topic->setDescription($newTopicDescription);
  $topic->setUser($user);

  $entityManager->persist($topic);
  $entityManager->flush();

  $tpl = $app->view;
  $tpl->topic = $topic;
  $tpl->display('views/topics/edit.tpl.php');

  $app->redirect('/topics/:id');

});