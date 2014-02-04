<?php 

use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="users")
 **/
  class User {
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $name;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $email;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $password;
    /**
     * @OneToMany(targetEntity="Topic", mappedBy="user")
     * @var Topic[]
     **/
    protected $topics;
    /**
     * @OneToMany(targetEntity="Suggestion", mappedBy="user")
     * @var Suggestion[]
     **/
    protected $suggestions;
    /**
     * @OneToMany(targetEntity="Upvote", mappedBy="user")
     * @var Upvote[]
     **/
    protected $upvotes;

    public function __construct() {
      $this->topics = new ArrayCollection();
      $this->suggestions = new ArrayCollection();
      $this->upvotes = new ArrayCollection();
    }

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getName() {
      return $this->name;
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function getEmail() {
      return $this->email;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function getPassword() {
      return $this->password;
    }

    public function setPassword($password) {
      $this->password = $password;
    }

    public function getTopics() {
      return $this->topics;
    }

    public function setTopics($topics) {
      $this->topics = $topics;
    }

    public function getUpvotes() {
      return $this->upvotes;
    }

    public function setUpvotes($upvotes) {
      $this->upvotes = $upvotes;
    }

    public function getSuggestions() {
      return $this->suggestions;
    }

    public function setSuggestions($suggestions) {
      $this->suggestions = $suggestions;
    }
  }