<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Admin\AdminBundle\Traits\DescriptibleTextTrait;
use Admin\AdminBundle\Traits\DescriptibleImageTrait;

/**
 * GameObject
 *
 * @ORM\Table(name="game_object_requirement")
 * @ORM\Entity
 */
class GameObjectRequirement
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
     * @ORM\Column(name="level", type="string", length=255)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="game_object", type="string", length=255)
     */
    private $gameObject;

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
     * Set level
     *
     * @param string $level
     *
     * @return GameObjectRequirement
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set gameObject
     *
     * @param string $gameObject
     *
     * @return GameObjectRequirement
     */
    public function setGameObject($gameObject)
    {
        $this->gameObject = $gameObject;

        return $this;
    }

    /**
     * Get gameObject
     *
     * @return string
     */
    public function getGameObject()
    {
        return $this->gameObject;
    }
}