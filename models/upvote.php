<?php
  class Upvote {
    protected $id;
    protected $suggestion_id;
    protected $user_id;

    public function getId() {
      return $this->id;
    }

    public function getSuggestionId() {
      return $this->suggestion_id;
    }

    public function getUserId() {
      return $this->user_id;
    }
  }