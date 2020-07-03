<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameQueue
 *
 * @ORM\Table(name="game_queue")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GameQueueRepository")
 */
class GameQueue
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
     * @ORM\ManyToMany(targetEntity="GameGroup")
     * @ORM\JoinTable(name="game_queue_groups",
     *      joinColumns={@ORM\JoinColumn(name="game_queue_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="game_group_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $gameObjectGroups;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=255)
     */
    private $time;

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
     * Add gameObjectGroup
     *
     * @param \AppBundle\Entity\Gamegroup $gameObjectGroup
     * @return City
     */
    public function addGameObjectGroup(\AppBundle\Entity\Gamegroup $gameObjectGroup)
    {
        $this->gameObjectGroups[] = $gameObjectGroup;

        return $this;
    }

    /**
     * Remove gameObjectGroup
     *
     * @param \AppBundle\Entity\Gamegroup $gameObjectGroup
     */
    public function removeGameObjectGroup(\AppBundle\Entity\Gamegroup $gameObjectGroup)
    {
        $this->gameObjectGroups->removeElement($gameObjectGroup);
    }

    /**
     * Get pictures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGameObjectGroups()
    {
        return $this->gameObjectGroups;
    }

    /**
     * Remove All pictures
     */
    public function removeAllGameObjectGroups()
    {
        $this->gameObjectGroups =   new ArrayCollection();
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return GameQueue
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }
}

