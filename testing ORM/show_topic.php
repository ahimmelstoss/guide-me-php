<?php

require_once "bootstrap.php";

$topicId = $argv[1];

$topic = $entityManager->find("Topic", (int)$topicId);

echo "Topic: ".$topic->getTitle()."\n";
echo "Description: ".$topic->getDescription()."\n";
echo "Posted By:" .$topic->getUser()->getName()."\n";
echo "Suggestions: \n";
$suggestions = $topic->getSuggestions();
  foreach ($suggestions as $suggestion) {
    echo $suggestion->getTitle();
    echo $suggestion->getUrl();
    echo $suggestion->getDescription();
  }