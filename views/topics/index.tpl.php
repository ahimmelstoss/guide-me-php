  <?php include_once 'views/partials/header.tpl.php'; ?>

  <h1 style="color: #7f8c8d;">All Topics</h1>

  <section id="topics">
    <?php foreach ($this->topics as $topic): ?>
    <article>
      <h3 class="topic-link"> <a href="/topics/<?php echo $topic->getId()?>"><?php echo $topic->getTitle() ?></a> <span class="name-link"> <a href="/users/<?php echo $topic->getUser()->getName()?>"> posted by: <?php echo $topic->getUser()->getName() ?></a> </span> </h3>
      <p> <strong>Description:</strong> <?php echo $topic->getDescription() ?> </p>
        <?php if (null !==($topic->getTags())): ?>
          <p> <strong>Tags:</strong>
            <?php foreach ($topic->getTags() as $tag): ?>
            <a href="/tags/<?php echo $tag->getName()?>"><?php echo $tag->getName() ?></a>
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

  <?php include_once 'views/partials/footer.tpl.php'; ?>