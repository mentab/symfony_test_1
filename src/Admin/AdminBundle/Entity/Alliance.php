<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Admin\AdminBundle\Traits\DescriptibleTextTrait;
use Admin\AdminBundle\Traits\DescriptibleImageTrait;

/**
 * Alliance
 *
 * @ORM\Table(name="alliance")
 * @ORM\Entity
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
     * @param \Admin\AdminBundle\Entity\Player $member
     *
     * @return Alliance
     */
    public function addMember(\Admin\AdminBundle\Entity\Player $member)
    {
        $this->members[] = $member;

        return $this;
    }

    /**
     * Remove member
     *
     * @param \Admin\AdminBundle\Entity\Player $member
     */
    public function removeMember(\Admin\AdminBundle\Entity\Player $member)
    {
        $this->members->removeElement($member);
    }

    /**
     * Get members
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Remove All members
     */
    public function removeAllMembers()
    {
        $this->members =   new ArrayCollection();
    }
}
