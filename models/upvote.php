<?php
/**
 * @Entity @Table(name="upvotes")
 **/
  class Upvote {
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /**
     * @ManyToOne(targetEntity="Suggestion", inversedBy="upvotes")
     **/
    protected $suggestion;
    /**
     * @ManyToOne(targetEntity="User", inversedBy="upvotes")
     **/
    protected $user;

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getSuggestion() {
      return $this->suggestion;
    }

    public function setSuggestion($suggestion) {
      $this->suggestion = $suggestion;
    }

    public function getUser() {
      return $this->user;
    }

    public function setUser($user) {
      $this->user = $user;
    }
  }