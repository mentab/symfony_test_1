<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
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
	private $gameScore;

	/**
     * @ORM\OneToOne(targetEntity="GameTime")
     */
	private $gameTime;

	/**
     * @ORM\OneToOne(targetEntity="GameCost")
     */
	private $gameCost;

	 /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
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
     * @var string
     *
     * @ORM\Column(name="game_requirement", type="string", length=255)
     */
    private $gameRequirement;

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
     * Set gameScore
     *
     * @param string $gameScore
     *
     * @return GameObject
     */
    public function setGameScore($gameScore)
    {
        $this->gameScore = $gameScore;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getGameScore()
    {
        return $this->gameScore;
    }

	/**
     * Set gameTime
     *
     * @param string $gameTime
     *
     * @return GameObject
     */
    public function setGameTime($gameTime)
    {
        $this->gameTime = $gameTime;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getGameTime()
    {
        return $this->gameTime;
    }

    /**
     * Set gameCost
     *
     * @param string $gameCost
     *
     * @return GameObject
     */
    public function setGameCost($gameCost)
    {
        $this->gameCost = $gameCost;

        return $this;
    }

    /**
     * Get gameCost
     *
     * @return string
     */
    public function getGameCost()
    {
        return $this->gameCost;
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
     * Set gameRequirement
     *
     * @param string $gameRequirement
     *
     * @return GameObject
     */
    public function setGameRequirement($gameRequirement)
    {
        $this->gameRequirement = $gameRequirement;

        return $this;
    }

    /**
     * Get gameRequirement
     *
     * @return string
     */
    public function getGameRequirement()
    {
        return $this->gameRequirement;
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