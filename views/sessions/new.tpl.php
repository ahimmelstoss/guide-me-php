<?php include_once 'views/partials/header.tpl.php'; ?>

<h1>Log In</h1>

<form action="" method="post">
  <div class="field">
    <label for="email">Email</label><br>
    <input class="form-style-login" id="email" name="email" type="text">
  </div>
  <div class="field">
    <label for="password">Password</label><br>
    <input class="form-style-login" id="password" name="password" type="password">
  </div>
  <input class="btn btn-default" type="submit" value="Log In">
</form>