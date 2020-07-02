<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Score
 *
 * @ORM\Table(name="score")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ScoreRepository")
 */
class Score
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
     * @ORM\Column(name="building_score", type="string", length=255)
     */
    private $buildingScore;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_score", type="string", length=255)
     */
    private $unitScore;

    /**
     * @var string
     *
     * @ORM\Column(name="defense_score", type="string", length=255)
     */
    private $defenseScore;

    /**
     * @var string
     *
     * @ORM\Column(name="offense_score", type="string", length=255)
     */
    private $offenseScore;

    /**
     * @var string
     *
     * @ORM\Column(name="trade_score", type="string", length=255)
     */
    private $tradeScore;

    /**
     * @var string
     *
     * @ORM\Column(name="caravan_score", type="string", length=255)
     */
    private $caravanScore;

    /**
     * @var string
     *
     * @ORM\Column(name="research_score", type="string", length=255)
     */
    private $researchScore;

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
     * Set buildingScore
     *
     * @param string $buildingScore
     *
     * @return Score
     */
    public function setBuildingScore($buildingScore)
    {
        $this->buildingScore = $buildingScore;

        return $this;
    }

    /**
     * Get buildingScore
     *
     * @return string
     */
    public function getBuildingScore()
    {
        return $this->buildingScore;
    }

    /**
     * Set unitScore
     *
     * @param string $unitScore
     *
     * @return Score
     */
    public function setUnitScore($unitScore)
    {
        $this->unitScore = $unitScore;

        return $this;
    }

    /**
     * Get unitScore
     *
     * @return string
     */
    public function getUnitScore()
    {
        return $this->unitScore;
    }

    /**
     * Set defenseScore
     *
     * @param string $defenseScore
     *
     * @return Score
     */
    public function setDefenseScore($defenseScore)
    {
        $this->defenseScore = $defenseScore;

        return $this;
    }

    /**
     * Get defenseScore
     *
     * @return string
     */
    public function getDefenseScore()
    {
        return $this->defenseScore;
    }

    /**
     * Set offenseScore
     *
     * @param string $offenseScore
     *
     * @return Score
     */
    public function setOffenseScore($offenseScore)
    {
        $this->offenseScore = $offenseScore;

        return $this;
    }

    /**
     * Get offenseScore
     *
     * @return string
     */
    public function getOffenseScore()
    {
        return $this->offenseScore;
    }

    /**
     * Set tradeScore
     *
     * @param string $tradeScore
     *
     * @return Score
     */
    public function setTradeScore($tradeScore)
    {
        $this->tradeScore = $tradeScore;

        return $this;
    }

    /**
     * Get tradeScore
     *
     * @return string
     */
    public function getTradeScore()
    {
        return $this->tradeScore;
    }

    /**
     * Set caravanScore
     *
     * @param string $caravanScore
     *
     * @return Score
     */
    public function setCaravanScore($caravanScore)
    {
        $this->caravanScore = $caravanScore;

        return $this;
    }

    /**
     * Get caravanScore
     *
     * @return string
     */
    public function getCaravanScore()
    {
        return $this->caravanScore;
    }

    /**
     * Set researchScore
     *
     * @param string $researchScore
     *
     * @return Score
     */
    public function setResearchScore($researchScore)
    {
        $this->researchScore = $researchScore;

        return $this;
    }

    /**
     * Get researchScore
     *
     * @return string
     */
    public function getResearchScore()
    {
        return $this->researchScore;
    }
}

