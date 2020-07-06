<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\DescriptibleTextTrait;
use AppBundle\Traits\DescriptibleImageTrait;

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
     * @var string
     *
     * @ORM\Column(name="cost", type="string", length=255)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="multiplicator", type="string", length=255)
     */
    private $costMultiplicator;

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
     * Set cost
     *
     * @param string $cost
     *
     * @return GameObjectValue
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
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