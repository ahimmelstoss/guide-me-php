<?php

$app->post('/suggestions/new', function() use($entityManager, $app) {
  $newSuggestionData = $app->request->post();
  $user = $entityManager->find("User", $app->request->session('user_id'));
  $topic = $entityManager->find("Topic", $newSuggestionData["topic_id"]);
  if (!isset($newSuggestionData["suggestion_url"]) && !isset($newSuggestionData["suggestion_description"])):
  elseif (isset($newSuggestionData["suggestion_url"]) && isset($newSuggestionData["suggestion_description"])):
    $suggestion = new Suggestion();
    $suggestion->setUrl($newSuggestionData["suggestion_url"]);
    $suggestion->setDescription($newSuggestionData["suggestion_description"]);
    $suggestion->setUser($user);
    $suggestion->setTopic($topic);
    $entityManager->persist($suggestion);
    $entityManager->flush();
    $app->redirect("/topics/{$topic->getId()}");
  endif;
});