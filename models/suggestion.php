<?php 

use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="suggestions")
 **/
  class Suggestion {
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $title;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $url;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $description;
    /**
     * @ManyToOne(targetEntity="Topic", inversedBy="suggestions")
     **/
    protected $topic;
    /**
     * @ManyToOne(targetEntity="User", inversedBy="suggestions")
     **/
    protected $user;
    /**
     * @OneToMany(targetEntity="Upvote", mappedBy="suggestions")
     * @var Upvote[]
     **/
    protected $upvotes;

    public function __construct() {
      $this->upvotes = new ArrayCollection();
    }

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
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

    public function getTopic() {
      return $this->topic;
    }

    public function setTopic($topic) {
      $this->topic = $topic;
    }

    public function getUser() {
      return $this->user;
    }

    public function setUser($user) {
      $this->user = $user;
    }

    public function getUpvotes() {
      return $this->upvotes;
    }

    public function setUpvotes($upvotes) {
      $this->upvotes = $upvotes;
    }
  }