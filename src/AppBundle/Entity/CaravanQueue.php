<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaravanQueue
 *
 * @ORM\Table(name="caravan_queue")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CaravanQueueRepository")
 */
class CaravanQueue
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
     * @ORM\Column(name="caravan", type="string", length=255)
     */
    private $caravan;

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
     * @return CaravanQueue
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
     * Set caravan
     *
     * @param string $caravan
     *
     * @return CaravanQueue
     */
    public function setCaravan($caravan)
    {
        $this->caravan = $caravan;

        return $this;
    }

    /**
     * Get caravan
     *
     * @return string
     */
    public function getCaravan()
    {
        return $this->caravan;
    }

    /**
     * Set resource
     *
     * @param string $resource
     *
     * @return CaravanQueue
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

