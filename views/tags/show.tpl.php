<?php include_once 'views/partials/header.tpl.php'; ?>

<h2>Topics tagged with "<i><?php echo $this->tag->getName() ?></i>":</h2>
<ul>
  <?php foreach ($this->tag->getTopics() as $topic): ?>
    <li> <a href="/topics/<?php echo $topic->getId() ?>"><?php echo $topic->getTitle() ?></a> </li>
  <?php endforeach; ?>  
</ul>

<?php include_once 'views/partials/footer.tpl.php'; ?>