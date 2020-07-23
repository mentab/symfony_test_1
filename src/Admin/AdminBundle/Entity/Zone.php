<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zone
 *
 * @ORM\Table(name="zone")
 * @ORM\Entity
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
     * @ORM\ManyToOne(targetEntity="Map", inversedBy="zones")
     * @ORM\JoinColumn(name="map_id", referencedColumnName="id")
     */
    private $map;

    /**
     * @ORM\OneToMany(targetEntity="Parcel", mappedBy="zone")
     */
    private $parcels;

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
     * Add parcel
     *
     * @param \Admin\AdminBundle\Entity\Parcel $parcel
     *
     * @return Parcel
     */
    public function addParcel(\Admin\AdminBundle\Entity\Parcel $parcel)
    {
        $this->parcels[] = $parcel;

        return $this;
    }

    /**
     * Remove parcel
     *
     * @param \Admin\AdminBundle\Entity\Parcel $parcel
     */
    public function removeParcel(\Admin\AdminBundle\Entity\Parcel $parcel)
    {
        $this->parcels->removeElement($parcel);
    }


    /**
     * Set map
     *
     * @param string $map
     *
     * @return Map
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
     * Get parcels
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParcels()
    {
        return $this->parcels;
    }

    /**
     * Remove All parcels
     */
    public function removeAllParcels()
    {
        $this->parcels =   new ArrayCollection();
    }
}

