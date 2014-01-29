<?php

require_once "bootstrap.php";

$userId = $argv[1];

$user = $entityManager->find("User", (int)$userId);

$topics = $user->getTopics();

foreach ($topics as $topic) {
  echo $topic->getTitle() . " - " . $topic->getDescription() . "\n";
}