<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitAttackType
 *
 * @ORM\Table(name="unit_attack_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UnitAttackTypeRepository")
 */
class UnitAttackType
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
     * @ORM\Column(name="damage", type="string", length=255)
     */
    private $damage;

    /**
     * @var string
     *
     * @ORM\Column(name="attack_type", type="string", length=255)
     */
    private $attackType;

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
     * Set damage
     *
     * @param string $damage
     *
     * @return UnitAttackType
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }

    /**
     * Get damage
     *
     * @return string
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set attackType
     *
     * @param string $attackType
     *
     * @return UnitAttackType
     */
    public function setAttackType($attackType)
    {
        $this->attackType = $attackType;

        return $this;
    }

    /**
     * Get attackType
     *
     * @return string
     */
    public function getAttackType()
    {
        return $this->attackType;
    }
}

