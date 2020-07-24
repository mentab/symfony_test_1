<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Admin\AdminBundle\Traits\DescriptibleTextTrait;
use Admin\AdminBundle\Traits\DescriptibleImageTrait;

/**
 * GameObjectCategory
 *
 * @ORM\Table(name="game_object_category")
 * @ORM\Entity
 */
class GameObjectCategory
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
     * @var string
     *
     * @ORM\Column(name="offset", type="smallint")
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
     * Set offset
     *
     * @param string $offset
     *
     * @return GameObjectCategory
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