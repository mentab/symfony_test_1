<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\DescriptibleTextTrait;
use AppBundle\Traits\DescriptibleImageTrait;

/**
 * Faction
 *
 * @ORM\Table(name="faction")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FactionRepository")
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
     * @var string
     *
     * @ORM\Column(name="unit_available", type="string", length=255)
     */
    private $unitAvailable;

    /**
     * @var string
     *
     * @ORM\Column(name="research_available", type="string", length=255)
     */
    private $researchAvailable;

    /**
     * @var string
     *
     * @ORM\Column(name="building_available", type="string", length=255)
     */
    private $buildingAvailable;

    /**
     * @var string
     *
     * @ORM\Column(name="offset", type="string", length=255)
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
     * Set unitAvailable
     *
     * @param string $unitAvailable
     *
     * @return Faction
     */
    public function setUnitAvailable($unitAvailable)
    {
        $this->unitAvailable = $unitAvailable;

        return $this;
    }

    /**
     * Get unitAvailable
     *
     * @return string
     */
    public function getUnitAvailable()
    {
        return $this->unitAvailable;
    }

    /**
     * Set researchAvailable
     *
     * @param string $researchAvailable
     *
     * @return Faction
     */
    public function setResearchAvailable($researchAvailable)
    {
        $this->researchAvailable = $researchAvailable;

        return $this;
    }

    /**
     * Get researchAvailable
     *
     * @return string
     */
    public function getResearchAvailable()
    {
        return $this->researchAvailable;
    }

    /**
     * Set buildingAvailable
     *
     * @param string $buildingAvailable
     *
     * @return Faction
     */
    public function setBuildingAvailable($buildingAvailable)
    {
        $this->buildingAvailable = $buildingAvailable;

        return $this;
    }

    /**
     * Get buildingAvailable
     *
     * @return string
     */
    public function getBuildingAvailable()
    {
        return $this->buildingAvailable;
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

