<?php

class Topic {
  protected $id;
  protected $title;
  protected $description;
  protected $user_id;

  public function getId() {
    return $this->id;
  }

  public function getTitle() {
    return $this->name;
  }

  public function setTitle($title) {
    $this->name = $name;
  }

  public function getDescription() {
    return $this->description;
  }

  public function setDescription($description) {
    $this->description = $description;
  }

  public function getUserId() {
    return $this->user_id;
  }

}