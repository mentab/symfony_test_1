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
     * @ORM\OneToMany(targetEntity="GameObject", mappedBy="category")
     */
    private $gameObjects;

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

    /**
     * Add gameObject
     *
     * @param \Admin\AdminBundle\Entity\GameObject $gameObject
     *
     * @return GameObjectQueue
     */
    public function addGameObject(\Admin\AdminBundle\Entity\GameObject $gameObject)
    {
        $this->gameObjects[] = $gameObject;

        return $this;
    }

    /**
     * Remove gameObject
     *
     * @param \Admin\AdminBundle\Entity\GameObject $gameObject
     */
    public function removeGameObject(\Admin\AdminBundle\Entity\GameObject $gameObject)
    {
        $this->gameObjects->removeElement($gameObject);
    }

    /**
     * Get gameObjects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGameObjects()
    {
        return $this->gameObjects;
    }

    /**
     * Remove All gameObjects
     */
    public function removeAllGameObjects()
    {
        $this->gameObjects =   new ArrayCollection();
    }
}