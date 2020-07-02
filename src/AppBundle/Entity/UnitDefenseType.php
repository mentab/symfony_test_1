<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitDefenseType
 *
 * @ORM\Table(name="unit_defense_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UnitDefenseTypeRepository")
 */
class UnitDefenseType
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
     * @ORM\Column(name="defense_type", type="string", length=255)
     */
    private $defenseType;

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
     * @return UnitDefenseType
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
     * Set defenseType
     *
     * @param string $defenseType
     *
     * @return UnitDefenseType
     */
    public function setDefenseType($defenseType)
    {
        $this->defenseType = $defenseType;

        return $this;
    }

    /**
     * Get defenseType
     *
     * @return string
     */
    public function getDefenseType()
    {
        return $this->defenseType;
    }
}

