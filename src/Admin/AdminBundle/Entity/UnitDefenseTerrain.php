<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitDefenseTerrain
 *
 * @ORM\Table(name="unit_defense_terrain")
 * @ORM\Entity
 */
class UnitDefenseTerrain
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
     * @ORM\Column(name="percentage", type="string", length=255)
     */
    private $percentage;

    /**
     * @var string
     *
     * @ORM\Column(name="terrain", type="string", length=255)
     */
    private $terrain;

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
     * Set percentage
     *
     * @param string $percentage
     *
     * @return UnitDefenseTerrain
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Get percentage
     *
     * @return string
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Set terrain
     *
     * @param string $terrain
     *
     * @return UnitDefenseTerrain
     */
    public function setTerrain($terrain)
    {
        $this->terrain = $terrain;

        return $this;
    }

    /**
     * Get terrain
     *
     * @return string
     */
    public function getTerrain()
    {
        return $this->terrain;
    }
}

