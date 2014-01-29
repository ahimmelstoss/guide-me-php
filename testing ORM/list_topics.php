<?php 
require_once "bootstrap.php";

$dql = "SELECT t, u FROM Topic t JOIN t.user u ORDER BY t.id DESC";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$topics = $query->getResult();

foreach ($topics as $topic) {
  echo $topic->getTitle() . " - " . $topic->getDescription() . "\n";
  echo "Posted by: " . $topic->getUser()->getName() . "\n";
  echo "Suggestions:\n";
  $suggestions = $topic->getSuggestions();
  foreach ($suggestions as $suggestion) {
    echo $suggestion->getTitle();
    echo $suggestion->getUrl();
    echo $suggestion->getDescription();
  }
}