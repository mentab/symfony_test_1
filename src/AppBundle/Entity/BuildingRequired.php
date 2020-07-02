<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuildingRequired
 *
 * @ORM\Table(name="building_required")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BuildingRequiredRepository")
 */
class BuildingRequired
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
     * @ORM\Column(name="level_min", type="string", length=255)
     */
    private $levelMin;

    /**
     * @var string
     *
     * @ORM\Column(name="building", type="string", length=255)
     */
    private $building;

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
     * Set levelMin
     *
     * @param string $levelMin
     *
     * @return BuildingRequired
     */
    public function setLevelMin($levelMin)
    {
        $this->levelMin = $levelMin;

        return $this;
    }

    /**
     * Get levelMin
     *
     * @return string
     */
    public function getLevelMin()
    {
        return $this->levelMin;
    }

    /**
     * Set building
     *
     * @param string $building
     *
     * @return BuildingRequired
     */
    public function setBuilding($building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->building;
    }
}

