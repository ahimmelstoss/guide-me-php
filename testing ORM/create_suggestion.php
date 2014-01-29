<?php

require_once 'bootstrap.php';

$userId = $argv[1];
$topicId = $argv[2];
$newSuggestionTitle = $argv[3];
$newSuggestionUrl = $argv[4];
$newSuggestionDescription = $argv[5];

$user = $entityManager->find("User", $userId);
$topic = $entityManager->find("Topic", $topicId);

$suggestion = new Suggestion();
$suggestion->setTitle($newSuggestionTitle);
$suggestion->setDescription($newSuggestionDescription);
$suggestion->setUrl($newSuggestionUrl);
$suggestion->setUser($user);
$suggestion->setTopic($topic);

$entityManager->persist($suggestion);
$entityManager->flush();

echo "Created Suggestion with ID " . $suggestion->getId() . "\n";