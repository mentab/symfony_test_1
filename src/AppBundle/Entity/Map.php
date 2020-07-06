<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map
 *
 * @ORM\Table(name="map")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MapRepository")
 */
class Map
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
     * @ORM\ManyToMany(targetEntity="Zone")
     *
     * @ORM\JoinTable(name="map_zones",
     *      joinColumns={@ORM\JoinColumn(name="zone_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="map_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $zones;

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
     * Add zone
     *
     * @param \AppBundle\Entity\Zone $zone
     *
     * @return GameObject
     */
    public function addZone(\AppBundle\Entity\Zone $zone)
    {
        $this->zones[] = $zone;

        return $this;
    }

    /**
     * Remove zone
     *
     * @param \AppBundle\Entity\Zone $zone
     */
    public function removeZone(\AppBundle\Entity\Zone $zone)
    {
        $this->zones->removeElement($zone);
    }

    /**
     * Get zones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getZones()
    {
        return $this->zones;
    }

    /**
     * Remove All zones
     */
    public function removeAllZones()
    {
        $this->zones =   new ArrayCollection();
    }
}

