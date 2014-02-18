<?php

$app->get('/topics', function() use($entityManager, $app) {
  $dql = "SELECT t, u FROM Topic t JOIN t.user u ORDER BY t.id DESC";

  $query = $entityManager->createQuery($dql);
  $topics = $query->getResult();

  $tpl = $app->view;
  $tpl->topics = $topics;
  $tpl->display('views/topics/index.tpl.php');
});

$app->get('/topics/new', function() use($app) {
  $tpl = $app->view;
  $tpl->display('views/topics/new.tpl.php');
});

$app->post('/topics/new', function() use($entityManager, $app) {

  $newTopicData = $app->request->post();
  $user = $entityManager->find("User", $app->request->session('user_id'));

  if (!isset($newTopicData["title"]) && !isset($newTopicData["description"])):
  elseif (isset($newTopicData["title"]) && isset($newTopicData["description"])):
    $topic = new Topic();
    $topic->setTitle($newTopicData["title"]);
    $topic->setDescription($newTopicData["description"]);
    $topic->setUser($user);
    $topic->setTags($newTopicData["tag_names"]);
    $entityManager->persist($topic);
    $entityManager->flush();
    $app->redirect('/topics');
  endif;
});

$app->get('/topics/:id', function($id) use($entityManager, $app) {
  $topic = $entityManager->find("Topic", (int)$id);

  $tpl = $app->view;
  $tpl->topic = $topic;
  $tpl->display('views/topics/show.tpl.php');
});

$app->post('/topics_upvote_suggestion', function() use($entityManager, $app) {
  $suggestionData = $app->request->post();
  $suggestionId = $suggestionData["suggestion_id"];
  $userId = $app->request->session('user_id');
  $suggestion = $entityManager->find("Suggestion", $suggestionId);
  //create a new upvote via suggestion
  //persist and flush
  $newUpvoteCount = count($suggestion->getUpvotes());
  //render json to change upvote count to newUpvoteCount
});