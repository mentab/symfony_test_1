<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use AppBundle\Traits\DescriptibleTextTrait;
use AppBundle\Traits\DescriptibleImageTrait;

/**
 * Alliance
 *
 * @ORM\Table(name="alliance")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AllianceRepository")
 */
class Alliance // TODO alliance module
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
     * @ORM\OneToOne(targetEntity="Player")
     */
    private $creator;

   /**
     * @ORM\ManyToMany(targetEntity="Player")
     * @ORM\JoinTable(name="alliance_members",
     *      joinColumns={@ORM\JoinColumn(name="alliance_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="player_id", referencedColumnName="id")}
     *      )
     */
    private $member;

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
     * Set creator
     *
     * @param string $creator
     *
     * @return Alliance
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Add member
     *
     * @param \AppBundle\Entity\Player $member
     * @return City
     */
    public function addMember(\AppBundle\Entity\Player $member)
    {
        $this->members[] = $member;

        return $this;
    }

    /**
     * Remove member
     *
     * @param \AppBundle\Entity\Player $member
     */
    public function removeMember(\AppBundle\Entity\Player $member)
    {
        $this->members->removeElement($member);
    }

    /**
     * Get pictures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Remove All pictures
     */
    public function removeAllMembers()
    {
        $this->members =   new ArrayCollection();
    }
}
