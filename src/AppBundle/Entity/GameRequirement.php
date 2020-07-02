<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\DescriptibleTextTrait;
use AppBundle\Traits\DescriptibleImageTrait;

/**
 * GameObject
 *
 * @ORM\Table(name="game_requirement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GameRequirementRepository")
 */
class GameRequirement
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
     * @return Research
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
     * @return Research
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