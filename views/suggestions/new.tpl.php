<?php if (isset($this->user)): ?>
  <h2>Add a new suggestion to <?php echo $this->topic->getTitle() ?></h2>
  <div class="well">
    <form method="post" action="../suggestions/new">
      <label for="suggestion_url">Suggestion URL</label><br>
      <input class="form-style" id="suggestion_url" type="text" name="suggestion_url"><br>
      <label for="suggestion_description">Description</label><br>
      <textarea class="form-style" id="suggestion_description" name="suggestion_description"></textarea><br>
      <input name="topic_id" type="hidden" value="<?php echo $this->topic->getId() ?>" >
      <input class="btn btn-default" type="submit" value="Add Suggestion">
    </form>
  </div>
<?php else: ?>
  <a href="/login" class="btn btn-primary btn-lg" id="new_suggestion" data-topic-id="<?php echo $this->topic->getId() ?>">Log in to post a new suggestion!</a>
<?php endif; ?>