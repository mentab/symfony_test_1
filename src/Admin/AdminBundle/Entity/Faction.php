<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Admin\AdminBundle\Traits\DescriptibleTextTrait;
use Admin\AdminBundle\Traits\DescriptibleImageTrait;

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
     * @ORM\OneToMany(targetEntity="GameObject", mappedBy="faction")
     */
    private $gameObjects;

    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="faction")
     */
    private $players;

    /**
     * @var string
     *
     * @ORM\Column(name="offset", type="smallint")
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
     * @param \Admin\AdminBundle\Entity\GameObject $gameObject
     * @return Faction
     */
    public function addGameObject(\Admin\AdminBundle\Entity\GameObject $gameObject)
    {
        $this->gameObjects[] = $gameObject;

        return $this;
    }

    /**
     * Remove gameObject
     *
     * @param \Admin\AdminBundle\Entity\GameObject $gameObject
     */
    public function removeGameObject(\Admin\AdminBundle\Entity\GameObject $gameObject)
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
     * Add player
     *
     * @param \Admin\AdminBundle\Entity\Player $player
     * @return Faction
     */
    public function addPlayer(\Admin\AdminBundle\Entity\Player $player)
    {
        $this->players[] = $player;

        return $this;
    }

    /**
     * Remove player
     *
     * @param \Admin\AdminBundle\Entity\Player $player
     */
    public function removePlayer(\Admin\AdminBundle\Entity\Player $player)
    {
        $this->players->removeElement($player);
    }

    /**
     * Get players
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Remove All players
     */
    public function removeAllPlayers()
    {
        $this->players =   new ArrayCollection();
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

