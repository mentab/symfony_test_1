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
     * @ORM\ManyToMany(targetEntity="Parcel")
     *
     * @ORM\JoinTable(name="zone_parcels",
     *      joinColumns={@ORM\JoinColumn(name="parcel_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="zone_id", referencedColumnName="id", unique=true)}
     *      )
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

