<?php

namespace AppBundle\Enum;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameObjectBehaviourEnum
 */
class GameObjectBehaviourEnum
{
	const BEHAVIOUR_DFN = "dfn";
	const BEHAVIOUR_PRD = "prd";
	const BEHAVIOUR_MNT = "mnt";

	/** @var array user friendly named behaviour */
    protected static $behaviourName = [
        self::BEHAVIOUR_DFN  => 'Defend',
        self::BEHAVIOUR_PRD => 'Produce',
        self::BEHAVIOUR_MNT => 'Maintenance'
    ];

    /**
     * @param  string $behaviourShortName
     * @return string
     */
    public static function getBehaviourName($behaviourShortName)
    {
        if (!isset(static::$behaviourName[$behaviourShortName])) {
            return "Unknown behaviour ($behaviourShortName)";
        }

        return static::$behaviourName[$behaviourShortName];
    }

    /**
     * @return array<string>
     */
    public static function getAvailableBehaviours()
    {
        return [
            self::BEHAVIOUR_DFN,
            self::BEHAVIOUR_PRD,
            self::BEHAVIOUR_MNT
        ];
    }
}