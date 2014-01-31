<html>
<head>
  <title>Topics</title>
</head>
<body>
  <?php foreach ($this->topics as $topic): ?>
    <?php echo $topic->getTitle() ?>
  <?php endforeach; ?>

</body>
</html>
