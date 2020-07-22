<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Admin\AdminBundle\Traits\DescriptibleTextTrait;
use Admin\AdminBundle\Traits\DescriptibleImageTrait;

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
     * @ORM\ManyToOne(targetEntity="Faction", inversedBy="players")
     * @ORM\JoinColumn(name="faction_id", referencedColumnName="id")
     */
    private $faction;

    /**
     * @ORM\ManyToOne(targetEntity="Server", inversedBy="players")
     * @ORM\JoinColumn(name="server_id", referencedColumnName="id")
     */
    private $server;

    /**
     * @ORM\OneToMany(targetEntity="City", mappedBy="player")
     */
    private $cities;

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
     * Set server
     *
     * @param string $server
     *
     * @return Player
     */
    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Get server
     *
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Add city
     *
     * @param \Admin\AdminBundle\Entity\City $city
     * @return City
     */
    public function addCity(\Admin\AdminBundle\Entity\City $city)
    {
        $this->cities[] = $city;

        return $this;
    }

    /**
     * Remove city
     *
     * @param \Admin\AdminBundle\Entity\City $city
     */
    public function removeCity(\Admin\AdminBundle\Entity\City $city)
    {
        $this->cities->removeElement($city);
    }

    /**
     * Get cities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * Remove All cities
     */
    public function removeAllCities()
    {
        $this->cities =   new ArrayCollection();
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

