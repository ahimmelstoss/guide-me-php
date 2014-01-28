<?php
  require_once 'bootstrap.php';

  $newTopicTitle = $argv[1];
  $newTopicDescription = $argv[2];
  $userId = $argv[3];

  $user = $entityManager->find("User", $userId);

  $topic = new Topic();
  $topic->setTitle($newTopicTitle);
  $topic->setDescription($newTopicDescription);
  $topic->setUser($user);

  $entityManager->persist($topic);
  $entityManager->flush();

  echo "Created Topic with ID " . $topic->getId() . "\n";