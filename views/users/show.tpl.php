<?php include_once 'views/partials/header.tpl.php'; ?>

  <h1><?php echo $this->user->getName() ?></h1>
  <h3><?php echo $this->user->getName() ?>'s Topics</h3>
  <?php foreach ($this->user->getTopics() as $topic): ?>
    <div class="well">
      <p> <a href="/topics/<?php echo $topic->getId() ?>"><?php echo $topic->getTitle() ?></a></p>
      <?php if (null !==($topic->getTags())): ?>
      <p>Tags:
        <?php foreach ($topic->getTags() as $tag): ?>
          <a href="/tags/<?php echo $tag->getName() ?>"><?php echo $tag->getName() ?></a>
        <?php endforeach; ?></p>
      <?php endif; ?>
      <p>Total upvotes for topic:
        <?php $total = 0; ?>
        <?php foreach ($topic->getSuggestions() as $suggestion): ?>
          <?php $total += count($suggestion->getUpvotes()) ?>
        <?php endforeach; ?>
        <?php echo $total ?>
      </p>
    </div>
  <?php endforeach; ?>

  <h3><?php echo $this->user->getName()?>'s Suggestions</h3>
  <?php foreach ($this->user->getSuggestions() as $suggestion): ?>
    <div class="well">
      <p><a target="_blank" href="<?php echo $suggestion->getUrl() ?>"><?php echo $suggestion->getTitle() ?></a> </p>
      <p>For Post called: <a href="/topics/<?php echo $suggestion->getTopic()->getId() ?>"><?php echo $suggestion->getTopic()->getTitle() ?></a></p>
      <p>Suggestion Upvotes: <?php echo count($suggestion->getUpvotes()) ?></p>
    </div>
  <?php endforeach; ?>

<?php include_once 'views/partials/footer.tpl.php'; ?>