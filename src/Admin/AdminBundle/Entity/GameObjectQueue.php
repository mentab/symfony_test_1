<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameObjectQueue
 *
 * @ORM\Table(name="game_object_queue")
 * @ORM\Entity
 */
class GameObjectQueue
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
     * @ORM\ManyToMany(targetEntity="GameObjectGroup")
     * @ORM\JoinTable(name="game_queue_groups",
     *      joinColumns={@ORM\JoinColumn(name="game_oject_queue_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="game_object_group_id", referencedColumnName="id", unique=true)}
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
     * @var string
     *
     * @ORM\Column(name="from", type="string", length=255)
     */
    private $from;

    /**
     * @var string
     *
     * @ORM\Column(name="to", type="string", length=255)
     */
    private $to;

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
     * @param \Admin\AdminBundle\Entity\GameObjectGroup $gameObjectGroup
     *
     * @return GameObjectQueue
     */
    public function addGameObjectGroup(\Admin\AdminBundle\Entity\GameObjectGroup $gameObjectGroup)
    {
        $this->gameObjectGroups[] = $gameObjectGroup;

        return $this;
    }

    /**
     * Remove gameObjectGroup
     *
     * @param \Admin\AdminBundle\Entity\GameObjectGroup $gameObjectGroup
     */
    public function removeGameObjectGroup(\Admin\AdminBundle\Entity\GameObjectGroup $gameObjectGroup)
    {
        $this->gameObjectGroups->removeElement($gameObjectGroup);
    }

    /**
     * Get gameObjectGroups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGameObjectGroups()
    {
        return $this->gameObjectGroups;
    }

    /**
     * Remove All gameObjectGroups
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
     * @return GameObjectQueue
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

    /**
     * Set time
     *
     * @param from $time
     *
     * @return GameObjectQueue
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return from
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set to
     *
     * @param string $to
     *
     * @return GameObjectQueue
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get ot
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }
}

