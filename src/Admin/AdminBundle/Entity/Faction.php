<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Admin\AdminBundle\Traits\DescriptibleTextTrait;
use Admin\AdminBundle\Traits\DescriptibleImageTrait;

/**
 * Faction
 *
 * @ORM\Table(name="faction")
 * @ORM\Entity
 */
class Faction
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
     * @ORM\OneToMany(targetEntity="GameObject", mappedBy="faction")
     */
    private $gameObjects;

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
     * Add gameObject
     *
     * @param \Admin\AdminBundle\Entity\GameObject $gameObject
     * @return Faction
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

    /**
     * Set offset
     *
     * @param string $offset
     *
     * @return Faction
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

