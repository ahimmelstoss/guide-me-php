<?php

$app->get('/tags', function() use($entityManager, $app) {
  $dql = "SELECT t FROM Tag t";

  $query = $entityManager->createQuery($dql);
  $tags = $query->getResult();

  $tpl = $app->view;
  $tpl->tags = $tags;
  $tpl->display('views/tags/index.tpl.php');
});

$app->get('/tags/:id', function($id) use($entityManager, $app) {
  $tag = $entityManager->find("Tag", (int)$id);

  $tpl = $app->view;
  $tpl->tag = $tag;
  $tpl->display('views/tags/show.tpl.php');
});