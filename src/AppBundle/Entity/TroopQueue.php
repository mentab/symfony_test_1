<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TroopQueue
 *
 * @ORM\Table(name="troop_queue")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TroopQueueRepository")
 */
class TroopQueue
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
     * @var string
     *
     * @ORM\Column(name="player", type="string", length=255)
     */
    private $player;

    /**
     * @var string
     *
     * @ORM\Column(name="troop", type="string", length=255)
     */
    private $troop;

    /**
     * @var string
     *
     * @ORM\Column(name="resource", type="string", length=255)
     */
    private $resource;


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
     * Set player
     *
     * @param string $player
     *
     * @return TroopQueue
     */
    public function setPlayer($player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return string
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set troop
     *
     * @param string $troop
     *
     * @return TroopQueue
     */
    public function setTroop($troop)
    {
        $this->troop = $troop;

        return $this;
    }

    /**
     * Get troop
     *
     * @return string
     */
    public function getTroop()
    {
        return $this->troop;
    }

    /**
     * Set resource
     *
     * @param string $resource
     *
     * @return TroopQueue
     */
    public function setResource($resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Get resource
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }
}

