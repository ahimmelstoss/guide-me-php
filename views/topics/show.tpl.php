<?php include_once 'views/partials/header.tpl.php'; ?>

  <h1> <?php echo $this->topic->getTitle() ?> <span class="name-link"> <a href="/users/<?php echo $this->topic->getUser()->getId()?>"> posted by: <?php echo $this->topic->getUser()->getName() ?></a></span> </h1>
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

    <div id="upvote-button">
      <span id="upvotecountspan<?php echo $suggestion->getid() ?>"><?php echo count($suggestion->getUpvotes()) ?></span> 
        <?php if (count($suggestion->getUpvotes()) == 1): ?>
          <?php echo "upvote" ?>
          <?php else: ?>
          <?php echo "upvotes" ?>
        <?php endif; ?> | 
      <button type="button" class="upvote" data-suggestion-id="<?php echo $suggestion->getid() ?>">
        <span class="glyphicon glyphicon-arrow-up"></span>
      </button>
    </div>
  </div>
  <?php endforeach; ?>

<?php include_once 'views/partials/footer.tpl.php'; ?>

<!-- TODO: suggestion form if user is signed in -->