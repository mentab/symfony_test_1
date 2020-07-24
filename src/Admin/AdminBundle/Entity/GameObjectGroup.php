<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameObjectGroup
 *
 * @ORM\Table(name="game_object_group")
 * @ORM\Entity
 */
class GameObjectGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\OneToOne(targetEntity="GameObject")
     */
    private $gameObject;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="smallint")
     */
    private $level;

     /**
     * @var string
     *
     * @ORM\Column(name="count", type="smallint")
     */
    private $count;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set gameObject
     *
     * @param string $gameObject
     *
     * @return GameObjectGroup
     */
    public function setGameObject($gameObject)
    {
        $this->gameObject = $gameObject;

        return $this;
    }

    /**
     * Get gameObject
     *
     * @return string
     */
    public function getGameObject()
    {
        return $this->gameObject;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return GameObjectGroup
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set count
     *
     * @param string $count
     *
     * @return GameObjectGroup
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return string
     */
    public function getCount()
    {
        return $this->count;
    }
}