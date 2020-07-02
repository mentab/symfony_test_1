<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\DescriptibleTextTrait;
use AppBundle\Traits\DescriptibleImageTrait;

/**
 * GameObject
 *
 * @ORM\Table(name="game_cost")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GameCostRepository")
 */
class GameCost
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
     * @return Research
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
     * Set multiplicator
     *
     * @param string $multiplicator
     *
     * @return Research
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