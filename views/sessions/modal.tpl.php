<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true"
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Please log in first!</h4>
      </div>
      
      <div class="modal-body">
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
      </div>

      <div class="modal-footer">
        <a href="/users/new" class="btn btn-primary btn-lg">Not a user? Sign up!</a>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->