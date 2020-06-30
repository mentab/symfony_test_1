<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResearchQueue
 *
 * @ORM\Table(name="research_queue")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResearchQueueRepository")
 */
class ResearchQueue
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
     * @ORM\Column(name="research", type="string", length=255)
     */
    private $research;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255)
     */
    private $level;

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
     * Set research
     *
     * @param string $research
     *
     * @return ResearchQueue
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

    /**
     * Set level
     *
     * @param string $level
     *
     * @return ResearchQueue
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return ResearchQueue
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

