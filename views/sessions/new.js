// came from sessions.js
$("body").append("<?php include_once 'views/sessions/modal.tpl.php' ?>")
$("#login").modal()
$("#login form").ajaxForm(function(json){
  if (json.login_status == 'success') {
    $('#login').modal('hide');
    $(window).trigger("login:success")
  } else if (json.login_status == 'failure') {
    $(window).trigger("login:failure")
  }
})