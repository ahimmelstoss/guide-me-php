<html>
<head>
  <title>GuideMe</title>
  <meta charset=utf-8>
  <link rel="stylesheet" type="text/css" href="assets/stylesheets/custom.css">
  <link rel="stylesheet" type="text/css" href="assets/stylesheets/bootstrap.min.css">
</head>
<body>
<div id="wrap">
    <div class="container top-spacer" id="main">
      <!-- TODO: where all content renders -->
    </div>
<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">GuideMe</a>

      <form class="navbar-form" role="search" action="/search_results" method="get" id="header-search-form">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
        </div>
      </form>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="/topics">Topics</a></li>
          <li><a href="/topics/new">New Topic</a></li>
          <?php if (isset($this->user)): //fix?>
            <li><a href="/users/<?php echo $this->user->getId() ?>"> <?php echo $this->user->getName() ?></a></li>
            <li><a href="/logout">Log Out</a></li>
          <?php else: ?>
            <li><a href="/signup">Sign Up</a></li>
            <li><a href="/login">Log In</a></li>
          <?php endif; ?> 
      </ul>
    </div>
  </div>
</nav>

</div>