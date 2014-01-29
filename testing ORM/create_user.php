<?php
  require_once 'bootstrap.php';

  $newUserName = $argv[1];
  $newUserEmail = $argv[2];
  $newUserPassword = $argv[3];

  $user = new User();
  $user->setName($newUserName);
  $user->setEmail($newUserEmail);
  $user->setPassword($newUserPassword);

  $entityManager->persist($user);
  $entityManager->flush();

  echo "Created User with ID " . $user->getId() . "\n";