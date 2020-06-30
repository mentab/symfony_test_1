<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resource
 *
 * @ORM\Table(name="resource")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResourceRepository")
 */
class Resource
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255)
     */
    private $icon;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Resource
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Resource
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Resource
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return Resource
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return Resource
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
     * @return Resource
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
     * @return Resource
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
     * @return Resource
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
     * @return Resource
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
     * @return Resource
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
     * @return Resource
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
     * @return Resource
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
     * @return Resource
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
}
