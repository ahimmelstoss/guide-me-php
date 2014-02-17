<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;

/**
 * @Entity @Table(name="tags")
 **/
  class Tag {
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $name;
    /**
     * @ManyToMany(targetEntity="Topic", mappedBy="tags")
     **/
    protected $topics;

    public function __construct() {
      $this->topics = new ArrayCollection();
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

    public function getTopics() {
      return $this->topics;
    }

    public function setTopics($topics) {
      $this->topics = $topics;
    }

    public static function findOrCreateTag($tagName) {
      global $entityManager;
      if ($tag = $entityManager->getRepository('Tag')->findOneBy(array('name' => $tagName))):
        $entityManager->merge($tag);
        $entityManager->flush();
      else:
        $tag = new Tag();
        $tag->setName($tagName);
        $entityManager->persist($tag);
        $entityManager->flush();
      endif;
      return $tag;
    }
  }