<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TradeQueu
 *
 * @ORM\Table(name="trade_queu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TradeQueuRepository")
 */
class TradeQueu
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
     * @ORM\Column(name="trader", type="string", length=255)
     */
    private $trader;

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
     * @return TradeQueu
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
     * Set trader
     *
     * @param string $trader
     *
     * @return TradeQueu
     */
    public function setTrader($trader)
    {
        $this->trader = $trader;

        return $this;
    }

    /**
     * Get trader
     *
     * @return string
     */
    public function getTrader()
    {
        return $this->trader;
    }

    /**
     * Set resource
     *
     * @param string $resource
     *
     * @return TradeQueu
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

