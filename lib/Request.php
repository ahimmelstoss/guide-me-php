<?php

namespace GuideMe;

class Request extends \Slim\Http\Request {
  protected $session;
  public function __construct(\Slim\Environment $env) {
    parent::__construct($env);
    $this->override = isset($env['session']);
    $this->session = $this->override ? $env['session'] : $_SESSION;
  }
  public function session($key = null, $default = null) {
    if ($key) {
      return isset($this->session[$key]) ?: null;
    }
    return $this->session;
  }
  public function setSession($key, $value = null) {
    if ($value) {
      if ($this->override) {
        $this->session[$key] = $value;
      } else {
        $_SESSION[$key] = $value;
      }
    } elseif (is_array($key)) {
      if ($this->override) {
        $this->session = array_merge($this->session, $key);
      } else {
        $_SESSION = array_merge($_SESSION, $key);
      }
    }
  }
}