<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\DescriptibleTextTrait;
use AppBundle\Traits\DescriptibleImageTrait;

/**
 * City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CityRepository")
 */
class City
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
     * @var string
     *
     * @ORM\Column(name="last_update", type="string", length=255)
     */
    private $lastUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="player", type="string", length=255)
     */
    private $player;

    /**
     * @var string
     *
     * @ORM\Column(name="resource", type="string", length=255)
     */
    private $resource;

    /**
     * @var string
     *
     * @ORM\Column(name="building", type="string", length=255)
     */
    private $building;

    /**
     * @var string
     *
     * @ORM\Column(name="building_queue", type="string", length=255)
     */
    private $buildingQueue;

    /**
     * @var string
     *
     * @ORM\Column(name="garrison", type="string", length=255)
     */
    private $garrison;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_queue", type="string", length=255)
     */
    private $unitQueue;

    /**
     * @var string
     *
     * @ORM\Column(name="research", type="string", length=255)
     */
    private $research;

    /**
     * @var string
     *
     * @ORM\Column(name="research_queue", type="string", length=255)
     */
    private $researchQueue;

    /**
     * @var string
     *
     * @ORM\Column(name="troop_queue_from", type="string", length=255)
     */
    private $troopQueueFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="troop_queue_to", type="string", length=255)
     */
    private $troopQueueTo;

    /**
     * @var string
     *
     * @ORM\Column(name="caravan_queue_from", type="string", length=255)
     */
    private $caravanQueueFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="caravan_queue_to", type="string", length=255)
     */
    private $caravanQueueTo;

    /**
     * @var string
     *
     * @ORM\Column(name="trade_queue_from", type="string", length=255)
     */
    private $tradeQueuFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="trade_queue_to", type="string", length=255)
     */
    private $tradeQueueTo;

    /**
     * @var string
     *
     * @ORM\Column(name="trade", type="string", length=255)
     */
    private $trade;

    /**
     * @var string
     *
     * @ORM\Column(name="score", type="string", length=255)
     */
    private $score;

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
     * Set name
     *
     * @param string $name
     *
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return City
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set lastUpdate
     *
     * @param string $lastUpdate
     *
     * @return City
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return string
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set player
     *
     * @param string $player
     *
     * @return City
     */
    public function setPlayer($player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return string
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set resource
     *
     * @param string $resource
     *
     * @return City
     */
    public function setResource($resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Get resource
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Set building
     *
     * @param string $building
     *
     * @return City
     */
    public function setBuilding($building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set buildingQueue
     *
     * @param string $buildingQueue
     *
     * @return City
     */
    public function setBuildingQueue($buildingQueue)
    {
        $this->buildingQueue = $buildingQueue;

        return $this;
    }

    /**
     * Get buildingQueue
     *
     * @return string
     */
    public function getBuildingQueue()
    {
        return $this->buildingQueue;
    }

    /**
     * Set garrison
     *
     * @param string $garrison
     *
     * @return City
     */
    public function setGarrison($garrison)
    {
        $this->garrison = $garrison;

        return $this;
    }

    /**
     * Get garrison
     *
     * @return string
     */
    public function getGarrison()
    {
        return $this->garrison;
    }

    /**
     * Set unitQueue
     *
     * @param string $unitQueue
     *
     * @return City
     */
    public function setUnitQueue($unitQueue)
    {
        $this->unitQueue = $unitQueue;

        return $this;
    }

    /**
     * Get unitQueue
     *
     * @return string
     */
    public function getUnitQueue()
    {
        return $this->unitQueue;
    }

    /**
     * Set research
     *
     * @param string $research
     *
     * @return City
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
     * Set researchQueue
     *
     * @param string $researchQueue
     *
     * @return City
     */
    public function setResearchQueue($researchQueue)
    {
        $this->researchQueue = $researchQueue;

        return $this;
    }

    /**
     * Get researchQueue
     *
     * @return string
     */
    public function getResearchQueue()
    {
        return $this->researchQueue;
    }

    /**
     * Set troopQueueFrom
     *
     * @param string $troopQueueFrom
     *
     * @return City
     */
    public function setTroopQueueFrom($troopQueueFrom)
    {
        $this->troopQueueFrom = $troopQueueFrom;

        return $this;
    }

    /**
     * Get troopQueueFrom
     *
     * @return string
     */
    public function getTroopQueueFrom()
    {
        return $this->troopQueueFrom;
    }

    /**
     * Set troopQueueTo
     *
     * @param string $troopQueueTo
     *
     * @return City
     */
    public function setTroopQueueTo($troopQueueTo)
    {
        $this->troopQueueTo = $troopQueueTo;

        return $this;
    }

    /**
     * Get troopQueueTo
     *
     * @return string
     */
    public function getTroopQueueTo()
    {
        return $this->troopQueueTo;
    }

    /**
     * Set caravanQueueFrom
     *
     * @param string $caravanQueueFrom
     *
     * @return City
     */
    public function setCaravanQueueFrom($caravanQueueFrom)
    {
        $this->caravanQueueFrom = $caravanQueueFrom;

        return $this;
    }

    /**
     * Get caravanQueueFrom
     *
     * @return string
     */
    public function getCaravanQueueFrom()
    {
        return $this->caravanQueueFrom;
    }

    /**
     * Set caravanQueueTo
     *
     * @param string $caravanQueueTo
     *
     * @return City
     */
    public function setcaravanQueueTo($caravanQueueTo)
    {
        $this->caravanQueueTo = $caravanQueueTo;

        return $this;
    }

    /**
     * Get caravanQueueTo
     *
     * @return string
     */
    public function getCaravanQueueTo()
    {
        return $this->caravanQueueTo;
    }

    /**
     * Set tradeQueueFrom
     *
     * @param string $tradeQueueFrom
     *
     * @return City
     */
    public function setTradeQueueFrom($tradeQueueFrom)
    {
        $this->tradeQueueFrom = $tradeQueueFrom;

        return $this;
    }

    /**
     * Get tradeQueueFrom
     *
     * @return string
     */
    public function getTradeQueueFrom()
    {
        return $this->tradeQueueFrom;
    }

    /**
     * Set tradeQueueTo
     *
     * @param string $tradeQueueTo
     *
     * @return City
     */
    public function setTradeQueueTo($tradeQueueTo)
    {
        $this->tradeQueueTo = $tradeQueueTo;

        return $this;
    }

    /**
     * Get tradeQueueTo
     *
     * @return string
     */
    public function getTradeQueueTo()
    {
        return $this->tradeQueueTo;
    }

    /**
     * Set trade
     *
     * @param string $trade
     *
     * @return City
     */
    public function setTrade($trade)
    {
        $this->trade = $trade;

        return $this;
    }

    /**
     * Get trade
     *
     * @return string
     */
    public function getTrade()
    {
        return $this->trade;
    }

    /**
     * Set score
     *
     * @param string $score
     *
     * @return City
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }
}

