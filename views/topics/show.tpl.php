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
        <a href="/tags/<?php echo $tag->getName() ?>"><?php echo $tag->getName() ?></a>
      <?php endforeach; ?></p>
  <?php endif; ?>

  <?php foreach ($this->topic->getSuggestions() as $suggestion): ?>
  <div class="well clearfix">
    <div id="suggestion-content">
      <p><a target="_blank" href="<?php echo $suggestion->getUrl()?>"><?php echo $suggestion->getTitle() ?></a><span class="suggestion-name-link"> added by: <a href="/users/<?php echo $suggestion->getUser()->getName() ?>"><?php echo $suggestion->getUser()->getName() ?></a></span></p>
      <p><?php echo $suggestion->getDescription() ?></p>
    </div>
  </div>
  <?php endforeach; ?>

</body>
</html>

<!-- TODO: upvote button and suggestion form if user is signed in -->