<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Admin\AdminBundle\Traits\DescriptibleTextTrait;
use Admin\AdminBundle\Traits\DescriptibleImageTrait;

/**
 * Server
 *
 * @ORM\Table(name="server")
 * @ORM\Entity
 */
class Server
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
     * @ORM\Column(name="max_player", type="string", length=255)
     */
    private $maxPlayer;

    /**
     * @var string
     *
     * @ORM\Column(name="player", type="string", length=255)
     */
    private $player;

    /**
     * @var string
     *
     * @ORM\Column(name="map", type="string", length=255)
     */
    private $map;

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
     * Set maxPlayer
     *
     * @param string $maxPlayer
     *
     * @return Server
     */
    public function setMaxPlayer($maxPlayer)
    {
        $this->maxPlayer = $maxPlayer;

        return $this;
    }

    /**
     * Get maxPlayer
     *
     * @return string
     */
    public function getMaxPlayer()
    {
        return $this->maxPlayer;
    }

    /**
     * Set player
     *
     * @param string $player
     *
     * @return Server
     */
    public function setPlayer($player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return string
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set map
     *
     * @param string $map
     *
     * @return Server
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return string
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set offset
     *
     * @param string $offset
     *
     * @return Server
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

