<?php
  require_once 'bootstrap.php';

  $newTopicTitle = $argv[1];

  $topic = new Topic();
  $topic->setTitle($newTopicTitle);

  $entityManager->persist($topic);
  $entityManager->flush();

  echo "Created Topic with ID " . $topic->getId() . "\n";