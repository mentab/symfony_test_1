<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Admin\AdminBundle\Traits\DescriptibleTextTrait;
use Admin\AdminBundle\Traits\DescriptibleImageTrait;

use \Datetime;

/**
 * City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity
 */
class City
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
     * @var string
     *
     * @ORM\Column(name="last_update", type="datetime")
     */
    private $lastUpdate;

    /**
     * @ORM\ManyToMany(targetEntity="GameObjectGroup")
     * @ORM\JoinTable(name="city_game_object_groups",
     *      joinColumns={@ORM\JoinColumn(name="city_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="game_object_group_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $gameObjectGroups;

    /**
     * @ORM\ManyToMany(targetEntity="GameObjectQueue")
     * @ORM\JoinTable(name="city_game_object_queues",
     *      joinColumns={@ORM\JoinColumn(name="city_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="game_object_queue_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $gameObjectQueues;

    /**
     * @var string
     *
     * @ORM\Column(name="trade", type="string", length=255, nullable=true)
     */
    private $trade;

    /**
     * @var string
     *
     * @ORM\Column(name="score", type="string", length=255, nullable=true)
     */
    private $score;

    public function __construct() {
        $this->lastUpdate = new DateTime();
    }

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
     * Set lastUpdate
     *
     * @param string $lastUpdate
     *
     * @return City
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return string
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Add gameObjectGroup
     *
     * @param \Admin\AdminBundle\Entity\GameObjectGroup $gameObjectGroup
     * @return City
     */
    public function addGameObjectGroup(\Admin\AdminBundle\Entity\GameGroup $gameObjectGroup)
    {
        $this->gameObjectGroups[] = $gameObjectGroup;

        return $this;
    }

    /**
     * Remove gameObjectGroup
     *
     * @param \Admin\AdminBundle\Entity\GameObjectGroup $gameObjectGroup
     */
    public function removeGameObjectGroup(\Admin\AdminBundle\Entity\GameGroup $gameObjectGroup)
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
     * Add gameObjectQueue
     *
     * @param \Admin\AdminBundle\Entity\GameObjectQueue $gameObjectQueue
     * @return City
     */
    public function addGameObjectQueue(\Admin\AdminBundle\Entity\GameQueue $gameObjectQueue)
    {
        $this->gameObjectQueues[] = $gameObjectQueue;

        return $this;
    }

    /**
     * Remove gameObjectQueue
     *
     * @param \Admin\AdminBundle\Entity\GameObjectQueue $gameObjectQueue
     */
    public function removeGameObjectQueue(\Admin\AdminBundle\Entity\GameQueue $gameObjectQueue)
    {
        $this->gameObjectQueues->removeElement($gameObjectQueue);
    }

    /**
     * Get gameObjectQueues
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGameObjectQueues()
    {
        return $this->gameObjectQueues;
    }

    /**
     * Remove All gameObjectQueues
     */
    public function removeAllGameObjectQueues()
    {
        $this->gameObjectQueues =   new ArrayCollection();
    }

    /**
     * Set trade
     *
     * @param string $trade
     *
     * @return City
     */
    public function setTrade($trade)
    {
        $this->trade = $trade;

        return $this;
    }

    /**
     * Get trade
     *
     * @return string
     */
    public function getTrade()
    {
        return $this->trade;
    }

    /**
     * Set score
     *
     * @param string $score
     *
     * @return City
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }
}

