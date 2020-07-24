<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Admin\AdminBundle\Traits\DescriptibleTextTrait;
use Admin\AdminBundle\Traits\DescriptibleImageTrait;

/**
 * GameObjectCategory
 *
 * @ORM\Table(name="game_object_value")
 * @ORM\Entity
 */
class GameObjectValue
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
     * @ORM\ManyToMany(targetEntity="GameObjectGroup")
     * @ORM\JoinTable(name="game_object_values_game_object_groups",
     *      joinColumns={@ORM\JoinColumn(name="game_object_value_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="game_object_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $gameObjectGroups;

    /**
     * @var string
     *
     * @ORM\Column(name="multiplicator", type="smallint")
     */
    private $multiplicator;

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
     * Add gameObjectGroup
     *
     * @param \Admin\AdminBundle\Entity\GameObjectGroup $gameObjectGroup
     *
     * @return GameObject
     */
    public function addGameObjectGroup(\Admin\AdminBundle\Entity\GameObjectGroup $gameObjectGroup)
    {
        $this->gameObjectGroups[] = $gameObjectGroup;

        return $this;
    }

    /**
     * Remove gameObjectGroup
     *
     * @param \Admin\AdminBundle\Entity\GameObjectGroup $gameObjectGroup
     */
    public function removeGameObjectGroup(\Admin\AdminBundle\Entity\GameObjectGroup $gameObjectGroup)
    {
        $this->gameObjectGroups->removeElement($gameObjectGroup);
    }

    /**
     * Get gameObjectGroups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGameObjectGroups()
    {
        return $this->gameObjectGroups;
    }

    /**
     * Remove All gameObjectGroups
     */
    public function removeAllGameObjectGroups()
    {
        $this->gameObjectGroups =   new ArrayCollection();
    }

    /**
     * Set multiplicator
     *
     * @param string $multiplicator
     *
     * @return GameObjectValue
     */
    public function setMultiplicator($multiplicator)
    {
        $this->multiplicator = $multiplicator;

        return $this;
    }

    /**
     * Get multiplicator
     *
     * @return string
     */
    public function getMultiplicator()
    {
        return $this->multiplicator;
    }
}