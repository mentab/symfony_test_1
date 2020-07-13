<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Battle
 *
 * @ORM\Table(name="battle")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\BattleRepository")
 */
class Battle
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
     * @ORM\Column(name="parcel", type="string", length=255)
     */
    private $parcel;

    /**
     * @var string
     *
     * @ORM\Column(name="troop_start", type="string", length=255)
     */
    private $troopStart;

    /**
     * @var string
     *
     * @ORM\Column(name="garrison_start", type="string", length=255)
     */
    private $garrisonStart;

    /**
     * @var string
     *
     * @ORM\Column(name="troop_end", type="string", length=255)
     */
    private $troopEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="garrison_end", type="string", length=255)
     */
    private $garrisonEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=255)
     */
    private $time;

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
     * Set parcel
     *
     * @param string $parcel
     *
     * @return Battle
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

    /**
     * Set troopStart
     *
     * @param string $troopStart
     *
     * @return Battle
     */
    public function setTroopStart($troopStart)
    {
        $this->troopStart = $troopStart;

        return $this;
    }

    /**
     * Get troopStart
     *
     * @return string
     */
    public function getTroopStart()
    {
        return $this->troopStart;
    }

    /**
     * Set garrisonStart
     *
     * @param string $garrisonStart
     *
     * @return Battle
     */
    public function setGarrisonStart($garrisonStart)
    {
        $this->garrisonStart = $garrisonStart;

        return $this;
    }

    /**
     * Get garrisonStart
     *
     * @return string
     */
    public function getGarrisonStart()
    {
        return $this->garrisonStart;
    }

    /**
     * Set troopEnd
     *
     * @param string $troopEnd
     *
     * @return Battle
     */
    public function setTroopEnd($troopEnd)
    {
        $this->troopEnd = $troopEnd;

        return $this;
    }

    /**
     * Get troopEnd
     *
     * @return string
     */
    public function getTroopEnd()
    {
        return $this->troopEnd;
    }

    /**
     * Set garrisonEnd
     *
     * @param string $garrisonEnd
     *
     * @return Battle
     */
    public function setGarrisonEnd($garrisonEnd)
    {
        $this->garrisonEnd = $garrisonEnd;

        return $this;
    }

    /**
     * Get garrisonEnd
     *
     * @return string
     */
    public function getGarrisonEnd()
    {
        return $this->garrisonEnd;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return Battle
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }
}

