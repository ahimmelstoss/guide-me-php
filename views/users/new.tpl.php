<?php include_once 'views/partials/header.tpl.php'; ?>

<h1>Sign Up</h1>
<form method="POST" action="">
  <div class="field">
    <label for="user_name">Name</label><br>
    <input class="form-style-login" id="user_name" name="name" type="text">
  </div>
  <div class="field">
    <label for="user_email">Email</label><br>
    <input class="form-style-login" id="user_email" name="email" type="text">
  </div>
  <div class="field">
    <label for="user_password">Password</label><br>
    <input class="form-style-login" id="user_password" name="password" type="password">
  </div>
  <div class="field">
    <label for="user_password_confirmation">Password confirmation</label><br>
    <input class="form-style-login" id="user_password_confirmation" name="password_confirmation" type="password">
  </div>
  <input class="btn btn-default" type="submit" value="Sign Up">
</form>

<?php include_once 'views/partials/footer.tpl.php'; ?>