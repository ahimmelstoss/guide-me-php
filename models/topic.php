<?php
/**
 * @Entity @Table(name="topics")
 **/
class Topic {
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
  protected $description;
  /**
   * @ManyToOne(targetEntity="User", inversedBy="topics")
   **/
  protected $user;
  /**
   * @OneToMany(targetEntity="Suggestion", mappedBy="topics")
   * @var Suggestion[]
   **/
  protected $suggestions;
  /**
   * @ManyToMany(targetEntity="Tag", inversedBy="topics")
   * @JoinTable(name="topics_tags")
   **/
  protected $tags;

  public function getId() {
    return $this->id;
  }

  public function getTitle() {
    return $this->title;
  }

  public function setTitle($title) {
    $this->title = $title;
  }

  public function getDescription() {
    return $this->description;
  }

  public function setDescription($description) {
    $this->description = $description;
  }

  public function getUser() {
    return $this->user;
  }

  public function setUser($user) {
    $this->user = $user;
  }

  public function getSuggestions() {
    return $this->suggestions;
  }

  public function setSuggestions($suggestions) {
    $this->suggestions = $suggestions;
  }

  public function getTags() {
    return $this->tags;
  }

  public function setTags($tags) {
    $this->tags = $tags;
  }

  public function __construct() {
    $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    $this->suggestions = new \Doctrine\Common\Collections\ArrayCollection();
  }
}