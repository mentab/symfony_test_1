<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\DescriptibleTextTrait;
use AppBundle\Traits\DescriptibleImageTrait;

/**
 * GameObjectScore
 *
 * @ORM\Table(name="game_object_score")
 * @ORM\Entity
 */
class GameObjectScore
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
     * @ORM\Column(name="score", type="string", length=255)
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="multiplicator", type="string", length=255)
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
     * Set score
     *
     * @param string $score
     *
     * @return GameObjectScore
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
     * Set multiplicator
     *
     * @param string $multiplicator
     *
     * @return GameObjectScore
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