<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Admin\AdminBundle\Traits\DescriptibleTextTrait;
use Admin\AdminBundle\Traits\DescriptibleImageTrait;

/**
 * GameObjectTime
 *
 * @ORM\Table(name="game_object_time")
 * @ORM\Entity
 */
class GameObjectTime
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
     * @ORM\Column(name="time", type="time")
     */
    private $time;

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
     * Set time
     *
     * @param string $time
     *
     * @return GameObjectTime
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
     * Set multiplicator
     *
     * @param string $multiplicator
     *
     * @return GameObjectTime
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