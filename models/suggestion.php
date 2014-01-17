<?php 

  class Suggestion {
    protected $id;
    protected $title;
    protected $url;
    protected $description;
    protected $topic_id;
    protected $user_id;

    public function getId() {
      return $this->id;
    }

    public function getTitle() {
      return $this->title;
    }

    public function setTitle($title) {
      $this->title = $title;
    }

    public function getUrl() {
      return $this->url;
    }

    public function setUrl($url) {
      $this->url = $url;
    }

    public function getDescription() {
      return $this->description;
    }

    public function setDescription($description) {
      $this->description = $description;
    }

    public function getTopicId() {
      return $this->topic_id;
    }

    public function getUserId() {
      return $this->user_id;
    }
  }