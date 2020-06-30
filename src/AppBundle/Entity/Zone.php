<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zone
 *
 * @ORM\Table(name="zone")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ZoneRepository")
 */
class Zone
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
     * @ORM\Column(name="terrain", type="string", length=255)
     */
    private $terrain;

    /**
     * @var string
     *
     * @ORM\Column(name="parcel", type="string", length=255)
     */
    private $parcel;


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
     * Set terrain
     *
     * @param string $terrain
     *
     * @return Zone
     */
    public function setTerrain($terrain)
    {
        $this->terrain = $terrain;

        return $this;
    }

    /**
     * Get terrain
     *
     * @return string
     */
    public function getTerrain()
    {
        return $this->terrain;
    }

    /**
     * Set parcel
     *
     * @param string $parcel
     *
     * @return Zone
     */
    public function setParcel($parcel)
    {
        $this->parcel = $parcel;

        return $this;
    }

    /**
     * Get parcel
     *
     * @return string
     */
    public function getParcel()
    {
        return $this->parcel;
    }
}

