<?php include_once 'views/partials/header.tpl.php'; ?>

<h1 style="color: #7f8c8d;">All Tags</h1>

<?php foreach ($this->tags as $tag): ?>
  <p> <a href="/tags/<?php echo $tag->getId() ?>"><?php echo $tag->getName() ?></a> </p>
<?php endforeach; ?>


<?php include_once 'views/partials/footer.tpl.php'; ?>