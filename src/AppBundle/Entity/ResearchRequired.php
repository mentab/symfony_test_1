<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResearchRequired
 *
 * @ORM\Table(name="research_required")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResearchRequiredRepository")
 */
class ResearchRequired
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
     * @ORM\Column(name="level_min", type="string", length=255)
     */
    private $levelMin;

    /**
     * @var string
     *
     * @ORM\Column(name="research", type="string", length=255)
     */
    private $research;


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
     * Set levelMin
     *
     * @param string $levelMin
     *
     * @return ResearchRequired
     */
    public function setLevelMin($levelMin)
    {
        $this->levelMin = $levelMin;

        return $this;
    }

    /**
     * Get levelMin
     *
     * @return string
     */
    public function getLevelMin()
    {
        return $this->levelMin;
    }

    /**
     * Set research
     *
     * @param string $research
     *
     * @return ResearchRequired
     */
    public function setResearch($research)
    {
        $this->research = $research;

        return $this;
    }

    /**
     * Get research
     *
     * @return string
     */
    public function getResearch()
    {
        return $this->research;
    }
}

