<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\DescriptibleTextTrait;
use AppBundle\Traits\DescriptibleImageTrait;

/**
 * ResearchCategory
 *
 * @ORM\Table(name="research_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResearchCategoryRepository")
 */
class ResearchCategory
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
     * @ORM\Column(name="cost_multiplicator", type="string", length=255)
     */
    private $costMultiplicator;

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
     * @ORM\Column(name="health", type="string", length=255)
     */
    private $health;

    /**
     * @var string
     *
     * @ORM\Column(name="attack_type", type="string", length=255)
     */
    private $attackType;

    /**
     * @var string
     *
     * @ORM\Column(name="defense_type", type="string", length=255)
     */
    private $defenseType;

    /**
     * @var string
     *
     * @ORM\Column(name="speed", type="string", length=255)
     */
    private $speed;

    /**
     * @var string
     *
     * @ORM\Column(name="carry", type="string", length=255)
     */
    private $carry;

    /**
     * @var string
     *
     * @ORM\Column(name="income", type="string", length=255)
     */
    private $income;

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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

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
     * @return ResearchCategory
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
     * @return ResearchCategory
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
     * @return ResearchCategory
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
     * @return ResearchCategory
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
     * Set costMultiplicator
     *
     * @param string $costMultiplicator
     *
     * @return ResearchCategory
     */
    public function setCostMultiplicator($costMultiplicator)
    {
        $this->costMultiplicator = $costMultiplicator;

        return $this;
    }

    /**
     * Get costMultiplicator
     *
     * @return string
     */
    public function getCostMultiplicator()
    {
        return $this->costMultiplicator;
    }

    /**
     * Set score
     *
     * @param string $score
     *
     * @return ResearchCategory
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
     * @return ResearchCategory
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
     * Set health
     *
     * @param string $health
     *
     * @return ResearchCategory
     */
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get health
     *
     * @return string
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set attackType
     *
     * @param string $attackType
     *
     * @return ResearchCategory
     */
    public function setAttackType($attackType)
    {
        $this->attackType = $attackType;

        return $this;
    }

    /**
     * Get attackType
     *
     * @return string
     */
    public function getAttackType()
    {
        return $this->attackType;
    }

    /**
     * Set defenseType
     *
     * @param string $defenseType
     *
     * @return ResearchCategory
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

    /**
     * Set speed
     *
     * @param string $speed
     *
     * @return ResearchCategory
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return string
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set carry
     *
     * @param string $carry
     *
     * @return ResearchCategory
     */
    public function setCarry($carry)
    {
        $this->carry = $carry;

        return $this;
    }

    /**
     * Get carry
     *
     * @return string
     */
    public function getCarry()
    {
        return $this->carry;
    }

    /**
     * Set income
     *
     * @param string $income
     *
     * @return ResearchCategory
     */
    public function setIncome($income)
    {
        $this->income = $income;

        return $this;
    }

    /**
     * Get income
     *
     * @return string
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * Set levelMax
     *
     * @param string $levelMax
     *
     * @return ResearchCategory
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
     * @return ResearchCategory
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
     * Set buildingRequired
     *
     * @param string $buildingRequired
     *
     * @return ResearchCategory
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
     * @return ResearchCategory
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
     * @return ResearchCategory
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

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ResearchCategory
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
}

