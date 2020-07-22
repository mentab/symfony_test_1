<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Admin\AdminBundle\Traits\DescriptibleTextTrait;
use Admin\AdminBundle\Traits\DescriptibleImageTrait;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity
 */
class Game
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
     * @ORM\OneToMany(targetEntity="Admin\AdminBundle\Entity\Server", mappedBy="game")
     */
    private $servers;

    public function __construct()
    {
        $this->servers = new ArrayCollection();
    }

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
     * Add server
     *
     * @param \Admin\AdminBundle\Entity\Server $server
     * @return Game
     */
    public function addServer(\Admin\AdminBundle\Entity\Server $server)
    {
        $this->servers[] = $server;

        return $this;
    }

    /**
     * Remove gameObjectGroup
     *
     * @param \Admin\AdminBundle\Entity\Server $server
     */
    public function removeServer(\Admin\AdminBundle\Entity\Server $server)
    {
        $this->servers->removeElement($server);
    }

    /**
     * Get servers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServers()
    {
        return $this->servers;
    }

    /**
     * Remove All servers
     */
    public function removeAllServerss()
    {
        $this->servers =   new ArrayCollection();
    }
}