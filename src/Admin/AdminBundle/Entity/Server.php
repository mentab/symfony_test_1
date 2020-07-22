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
     * @ORM\OneToMany(targetEntity="Player", mappedBy="server")
     */
    private $players;

    /**
     * @var string
     *
     * @ORM\Column(name="map", type="string", length=255, nullable=true)
     */
    private $map;

    /**
     * @var string
     *
     * @ORM\Column(name="offset", type="string", length=255)
     */
    private $offset;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\Game", inversedBy="servers")
     * @ORM\JoinColumn(name="game_id", referencedColumnName="id")
     */
    private $game;

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
     * Add player
     *
     * @param \Admin\AdminBundle\Entity\Player $player
     * @return Server
     */
    public function addPlayer(\Admin\AdminBundle\Entity\Player $player)
    {
        $this->players[] = $player;

        return $this;
    }

    /**
     * Remove player
     *
     * @param \Admin\AdminBundle\Entity\Player $player
     */
    public function removePlayer(\Admin\AdminBundle\Entity\Player $player)
    {
        $this->players->removeElement($player);
    }

    /**
     * Get players
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Remove All players
     */
    public function removeAllPlayers()
    {
        $this->players =   new ArrayCollection();
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

    /**
     * Set game
     *
     * @param \Admin\AdminBundle\Entity\Game $game
     *
     * @return Server
     */
    public function setGame($game)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return \Charlotte\MainBundle\Entity\Game
     */
    public function getGame()
    {
        return $this->game;
    }
}

