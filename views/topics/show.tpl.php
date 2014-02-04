<html>
<head>
  <title>Topics</title>
</head>
<body>

  <h1> <?php echo $this->topic->getTitle() ?> </h1>
  <h3> <?php echo $this->topic->getDescription() ?> </h3>
  <?php if (null !==($this->topic->getTags())): ?>
    <p><strong>Tags:</strong>
      <?php foreach ($this->topic->getTags() as $tag): ?>
        <?php echo $tag->getName() ?>
      <?php endforeach; ?></p>
  <?php endif; ?>

  <?php foreach ($this->topic->getSuggestions() as $suggestion): ?>
  <div class="well clearfix">
    <div id="suggestion-content">
      <p><?php echo $suggestion->getTitle() ?><span class="suggestion-name-link"><?php echo $suggestion->getUser()->getName() ?></span></p>
      <p><?php $suggestion->getDescription() ?></p>
    </div>
  </div>
  <?php endforeach; ?>

</body>
</html>

<!-- TODO: upvote button and suggestion form if user is signed in -->