<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\DescriptibleTextTrait;
use AppBundle\Traits\DescriptibleImageTrait;

/**
 * Building
 *
 * @ORM\Table(name="building")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BuildingRepository")
 */
class Building
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
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=255)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="time_multiplicator", type="string", length=255)
     */
    private $timeMultiplicator;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="string", length=255)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="cost_multiplicaotr", type="string", length=255)
     */
    private $costMultiplicaotr;

    /**
     * @var string
     *
     * @ORM\Column(name="score", type="string", length=255)
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="score_multiplicator", type="string", length=255)
     */
    private $scoreMultiplicator;

    /**
     * @var string
     *
     * @ORM\Column(name="level_max", type="string", length=255)
     */
    private $levelMax;

    /**
     * @var string
     *
     * @ORM\Column(name="faction", type="string", length=255)
     */
    private $faction;

    /**
     * @var string
     *
     * @ORM\Column(name="resource_available", type="string", length=255)
     */
    private $resourceAvailable;

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
     * @ORM\Column(name="building_required", type="string", length=255)
     */
    private $buildingRequired;

    /**
     * @var string
     *
     * @ORM\Column(name="research_required", type="string", length=255)
     */
    private $researchRequired;

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
     * Set category
     *
     * @param string $category
     *
     * @return Building
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return Building
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
     * Set timeMultiplicator
     *
     * @param string $timeMultiplicator
     *
     * @return Building
     */
    public function setTimeMultiplicator($timeMultiplicator)
    {
        $this->timeMultiplicator = $timeMultiplicator;

        return $this;
    }

    /**
     * Get timeMultiplicator
     *
     * @return string
     */
    public function getTimeMultiplicator()
    {
        return $this->timeMultiplicator;
    }

    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return Building
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set costMultiplicaotr
     *
     * @param string $costMultiplicaotr
     *
     * @return Building
     */
    public function setCostMultiplicaotr($costMultiplicaotr)
    {
        $this->costMultiplicaotr = $costMultiplicaotr;

        return $this;
    }

    /**
     * Get costMultiplicaotr
     *
     * @return string
     */
    public function getCostMultiplicaotr()
    {
        return $this->costMultiplicaotr;
    }

    /**
     * Set score
     *
     * @param string $score
     *
     * @return Building
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

    /**
     * Set scoreMultiplicator
     *
     * @param string $scoreMultiplicator
     *
     * @return Building
     */
    public function setScoreMultiplicator($scoreMultiplicator)
    {
        $this->scoreMultiplicator = $scoreMultiplicator;

        return $this;
    }

    /**
     * Get scoreMultiplicator
     *
     * @return string
     */
    public function getScoreMultiplicator()
    {
        return $this->scoreMultiplicator;
    }

    /**
     * Set levelMax
     *
     * @param string $levelMax
     *
     * @return Building
     */
    public function setLevelMax($levelMax)
    {
        $this->levelMax = $levelMax;

        return $this;
    }

    /**
     * Get levelMax
     *
     * @return string
     */
    public function getLevelMax()
    {
        return $this->levelMax;
    }

    /**
     * Set faction
     *
     * @param string $faction
     *
     * @return Building
     */
    public function setFaction($faction)
    {
        $this->faction = $faction;

        return $this;
    }

    /**
     * Get faction
     *
     * @return string
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * Set resourceAvailable
     *
     * @param string $resourceAvailable
     *
     * @return Building
     */
    public function setResourceAvailable($resourceAvailable)
    {
        $this->resourceAvailable = $resourceAvailable;

        return $this;
    }

    /**
     * Get resourceAvailable
     *
     * @return string
     */
    public function getResourceAvailable()
    {
        return $this->resourceAvailable;
    }

    /**
     * Set unitAvailable
     *
     * @param string $unitAvailable
     *
     * @return Building
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
     * @return Building
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
     * Set buildingRequired
     *
     * @param string $buildingRequired
     *
     * @return Building
     */
    public function setBuildingRequired($buildingRequired)
    {
        $this->buildingRequired = $buildingRequired;

        return $this;
    }

    /**
     * Get buildingRequired
     *
     * @return string
     */
    public function getBuildingRequired()
    {
        return $this->buildingRequired;
    }

    /**
     * Set researchRequired
     *
     * @param string $researchRequired
     *
     * @return Building
     */
    public function setResearchRequired($researchRequired)
    {
        $this->researchRequired = $researchRequired;

        return $this;
    }

    /**
     * Get researchRequired
     *
     * @return string
     */
    public function getResearchRequired()
    {
        return $this->researchRequired;
    }

    /**
     * Set offset
     *
     * @param string $offset
     *
     * @return Building
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

