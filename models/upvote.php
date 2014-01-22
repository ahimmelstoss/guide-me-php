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
    protected $suggestions;
    /**
     * @ManyToOne(targetEntity="User", inversedBy="upvotes")
     **/
    protected $users;

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getSuggestions() {
      return $this->suggestions;
    }

    public function setSuggestions($suggestions) {
      $this->suggestions = $suggestions;
    }

    public function getUsers() {
      return $this->users;
    }

    public function setUsers($users) {
      $this->users = $users;
    }
  }