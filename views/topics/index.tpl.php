<html>
<head>
  <title>Topics</title>
</head>
<body>
  <h1 style="color: #7f8c8d;">All Topics</h1>

  <section id="topics">
    <?php foreach ($this->topics as $topic): ?>
    <article>
      <h3 class="topic-link"> <?php echo $topic->getTitle() ?> <span class="name-link"> <?php echo $topic->getUser()->getName() ?> </span> </h3>
      <p> <strong>Description:</strong> <?php echo $topic->getDescription() ?> </p>
        <?php if (null !==($topic->getTags())): ?>
          <p> <strong>Tags:</strong>
            <?php foreach ($topic->getTags() as $tag): ?>
            <?php echo $tag->getName() ?>
          <?php endforeach; ?>
          </p>
       <?php endif; ?>
       <p> <strong> <?php echo count($topic->getSuggestions()) ?> </strong> 
        <?php if (count($topic->getSuggestions()) == 1): ?>
          <?php echo "suggestion" ?>
          <?php else: ?>
          <?php echo "suggestions" ?>
          <?php endif; ?>
        </p>
    </article>
    <?php endforeach; ?>
  </section>

</body>
</html>

