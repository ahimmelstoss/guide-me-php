<?php
  require_once 'bootstrap.php';

  $newTopicTitle = $argv[1];
  $newTopicDescription = $argv[2];
  $newTopicUser = $argv[3];

  $topic = new Topic();
  $topic->setTitle($newTopicTitle);
  $topic->setUser($newTopicUser);

  $entityManager->persist($topic);
  $entityManager->flush();

  echo "Created Topic with ID " . $topic->getId() . "\n";