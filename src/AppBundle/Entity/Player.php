<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\DescriptibleTextTrait;
use AppBundle\Traits\DescriptibleImageTrait;

/**
 * Player
 *
 * @ORM\Table(name="player")
 * @ORM\Entity
 */
class Player
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
     * @ORM\Column(name="faction", type="string", length=255)
     */
    private $faction;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="alliance", type="string", length=255)
     */
    private $alliance;

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
     * Set faction
     *
     * @param string $faction
     *
     * @return Player
     */
    public function setFaction($faction)
    {
        $this->faction = $faction;

        return $this;
    }

    /**
     * Get faction
     *
     * @return string
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Player
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set alliance
     *
     * @param string $alliance
     *
     * @return Player
     */
    public function setAlliance($alliance)
    {
        $this->alliance = $alliance;

        return $this;
    }

    /**
     * Get alliance
     *
     * @return string
     */
    public function getAlliance()
    {
        return $this->alliance;
    }
}

