<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use AppBundle\Traits\DescriptibleTextTrait;
use AppBundle\Traits\DescriptibleImageTrait;

use AppBundle\Enum\GameObjectActionEnum;
use AppBundle\Enum\GameObjectBehaviourEnum;

/**
 * GameObject
 *
 * @ORM\Table(name="game_object")
 * @ORM\Entity
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
     * @ORM\OneToOne(targetEntity="GameObjectScore")
     */
	private $score;

	/**
     * @ORM\OneToOne(targetEntity="GameObjectTime")
     */
	private $time;

    /**
     * @ORM\OneToOne(targetEntity="GameObjectValue")
     */
    private $maintenance;

	/**
     * @ORM\OneToOne(targetEntity="GameObjectValue")
     */
	private $cost;

    /**
     * @ORM\OneToOne(targetEntity="GameObjectValue")
     */
    private $prod;

	/**
     * @ORM\OneToOne(targetEntity="GameObjectCategory")
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="actions", type="array")
     */
    private $actions;

    /**
     * @var string
     *
     * @ORM\Column(name="behaviours", type="array")
     */
    private $behaviours;

    /**
     * @var string
     *
     * @ORM\Column(name="level_max", type="smallint")
     */
    private $levelMax;

    /**
     * @var string
     *
     * @ORM\Column(name="faction", type="string", length=255)
     */
    private $faction;

    /**
     * @ORM\ManyToMany(targetEntity="GameObjectRequirement")
     * @ORM\JoinTable(name="game_object_requirements",
     *      joinColumns={@ORM\JoinColumn(name="game_object_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="game_object_requirement_id", referencedColumnName="id", unique=true)}
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
     * Get score
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
     * @return GameObject
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
     * Set maintenance
     *
     * @param string $maintenance
     *
     * @return GameObject
     */
    public function setMaintenance($maintenance)
    {
        $this->maintenance = $maintenance;

        return $this;
    }

    /**
     * Get maintenance
     *
     * @return string
     */
    public function getMaintenance()
    {
        return $this->maintenance;
    }

    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return GameObject
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
     * Set prod
     *
     * @param string $prod
     *
     * @return GameObject
     */
    public function setProd($prod)
    {
        $this->prod = $prod;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getProd()
    {
        return $this->prod;
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
     * Add action
     *
     * @return GameObject
     */
    public function addAction($action)
    {
        if (!in_array($action, GameObjectActionEnum::getAvailableActions())) {
             throw new \InvalidArgumentException("Invalid action");
         }

        if (is_array($this->actions) && is_string($action)) {
            $this->actions = array_unique(array_merge(array($action), $this->actions));
        }

        return $this;
    }

    /**
     * Set actions
     *
     * @return GameObject
     */
    public function setActions($actions)
    {
        $this->actions = array_unique($actions);

        return $this;
    }

    /**
     * Get actions
     */
    public function getActions()
    {
        if (is_array($this->actions)) {
            return array_unique($this->actions);
        }

        return array();
    }

    /**
     * Reset behaviours
     */
    public function resetActions()
    {
        $this->actions = array();
    }

    /**
     * Add behaviour
     *
     * @return GameObject
     */
    public function addBehaviour($behaviour)
    {
        if (!in_array($behaviour, GameObjectBehaviourEnum::getAvailableBehaviours())) {
             throw new \InvalidArgumentException("Invalid behaviour");
         }

        if (is_array($this->behaviours) && is_string($behaviour)) {
            $this->behaviours = array_unique(array_merge(array($behaviour), $this->behaviours));
        }

        return $this;
    }

    /**
     * Set behaviours
     *
     * @return GameObject
     */
    public function setBehaviours($behaviours)
    {
        $this->behaviours = array_unique($behaviours);

        return $this;
    }

    /**
     * Get behaviours
     */
    public function getBehaviours()
    {
        if (is_array($this->behaviours)) {
            return array_unique($this->behaviours);
        }

        return array();
    }

    /**
     * Reset behaviours
     */
    public function resetBehaviours()
    {
        $this->behaviours = array();
    }

    /**
     * Set levelMax
     *
     * @param integer $levelMax
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
     * @return integer
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
     *
     * @return GameObject
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
    public function removeRequirement(\AppBundle\Entity\GameRequirement $requirement)
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