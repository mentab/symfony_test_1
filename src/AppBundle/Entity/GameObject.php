<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use AppBundle\Traits\DescriptibleTextTrait;
use AppBundle\Traits\DescriptibleImageTrait;

/**
 * GameObject
 *
 * @ORM\Table(name="game_object")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GameRepository")
 */
class GameObject
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
     * @ORM\OneToOne(targetEntity="GameScore")
     */
	private $score;

	/**
     * @ORM\OneToOne(targetEntity="GameTime")
     */
	private $time;

	/**
     * @ORM\OneToOne(targetEntity="GameCost")
     */
	private $cost;

	/**
     * @ORM\OneToOne(targetEntity="GameCategory")
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

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
     * @ORM\ManyToMany(targetEntity="GameRequirement")
     * @ORM\JoinTable(name="game_object_requirements",
     *      joinColumns={@ORM\JoinColumn(name="game_object_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="game_requirement_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $requirements;

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
     * Set score
     *
     * @param string $score
     *
     * @return GameObject
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }

	/**
     * Set time
     *
     * @param string $time
     *
     * @return Object
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
     * Set cost
     *
     * @param string $cost
     *
     * @return Object
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
     * Set category
     *
     * @param string $category
     *
     * @return GameObject
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
     * Set type
     *
     * @param string $type
     *
     * @return GameObject
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
     * Set levelMax
     *
     * @param string $levelMax
     *
     * @return GameObject
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
     * @return GameObject
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
     * Add requirement
     *
     * @param \AppBundle\Entity\GameRequirement $requirement
     * @return Offerchildpaint
     */
    public function addRequirement(\AppBundle\Entity\GameRequirement $requirement)
    {
        $this->requirements[] = $requirement;

        return $this;
    }

    /**
     * Remove requirement
     *
     * @param \AppBundle\Entity\GameRequirement $requirement
     */
    public function removePicture(\AppBundle\Entity\GameRequirement $requirement)
    {
        $this->requirements->removeElement($requirement);
    }

    /**
     * Get requirements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Remove All requirements
     */
    public function removeAllRequirements()
    {
        $this->requirements =   new ArrayCollection();
    }

    /**
     * Set offset
     *
     * @param string $offset
     *
     * @return GameObject
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