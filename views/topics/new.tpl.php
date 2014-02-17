<?php include_once 'views/partials/header.tpl.php'; ?>

<div class="well">
  <form method="POST" action="">
    <label for="title">Title</label><br>
    <input class="form-style" id="title" type="text" name="title"><br>
    <label for="description">Description</label><br>
    <textarea class="form-style" id="description" name="description"></textarea><br>
      <label for="topic_tags">Tags / Categories (comma, separated, underscores_for_multiple_words)</label><br>
  <input class="form-style" id="topic_tags" name="tag_names" type="text"><br>
    <input type="submit" class="btn btn-default">
  </form>
</div>

<?php include_once 'views/partials/footer.tpl.php'; ?>