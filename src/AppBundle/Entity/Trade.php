<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trade
 *
 * @ORM\Table(name="trade")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TradeRepository")
 */
class Trade
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="offer", type="string", length=255)
     */
    private $offer;

    /**
     * @var string
     *
     * @ORM\Column(name="asking", type="string", length=255)
     */
    private $asking;

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
     * Set type
     *
     * @param string $type
     *
     * @return Trade
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set offer
     *
     * @param string $offer
     *
     * @return Trade
     */
    public function setOffer($offer)
    {
        $this->offer = $offer;

        return $this;
    }

    /**
     * Get offer
     *
     * @return string
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Set asking
     *
     * @param string $asking
     *
     * @return Trade
     */
    public function setAsking($asking)
    {
        $this->asking = $asking;

        return $this;
    }

    /**
     * Get asking
     *
     * @return string
     */
    public function getAsking()
    {
        return $this->asking;
    }
}

