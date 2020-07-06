<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\DescriptibleTextTrait;
use AppBundle\Traits\DescriptibleImageTrait;

/**
 * Faction
 *
 * @ORM\Table(name="faction")
 * @ORM\Entity
 */
class Faction
{
    use DescriptibleTextTrait, DescriptibleImageTrait;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="GameObject")
     * @ORM\JoinTable(name="faction_game_objects",
     *      joinColumns={@ORM\JoinColumn(name="faction_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="game_object_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $gameObjects;

    /**
     * @var string
     *
     * @ORM\Column(name="offset", type="string", length=255)
     */
    private $offset;

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
     * Add gameObject
     *
     * @param \AppBundle\Entity\GameObject $gameObject
     * @return Faction
     */
    public function addGameObject(\AppBundle\Entity\GameObject $gameObject)
    {
        $this->gameObjects[] = $gameObject;

        return $this;
    }

    /**
     * Remove gameObject
     *
     * @param \AppBundle\Entity\GameObject $gameObject
     */
    public function removeGameObject(\AppBundle\Entity\GameObject $gameObject)
    {
        $this->gameObjects->removeElement($gameObject);
    }

    /**
     * Get gameObjects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGameObjects()
    {
        return $this->gameObjects;
    }

    /**
     * Remove All gameObjects
     */
    public function removeAllGameObjects()
    {
        $this->gameObjects =   new ArrayCollection();
    }

    /**
     * Set offset
     *
     * @param string $offset
     *
     * @return Faction
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get offset
     *
     * @return string
     */
    public function getOffset()
    {
        return $this->offset;
    }
}

