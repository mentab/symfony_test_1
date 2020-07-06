<?php

namespace AppBundle\Enum;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\DescriptibleTextTrait;

/**
 * GameObjectActionEnum
 */
class GameObjectActionEnum
{
	const ACTION_ATTACK = "atk";
	const ACTION_DEFEND = "def";

	/** @var array user friendly named type */
    protected static $actionName = [
        self::ACTION_ATTACK  => 'Attack',
        self::ACTION_DEFEND => 'Defend'
    ];

    /**
     * @param  string $actionShortName
     * @return string
     */
    public static function getActionName($actionShortName)
    {
        if (!isset(static::$actionName[$actionShortName])) {
            return "Unknown type ($typeShortName)";
        }

        return static::$actionName[$actionShortName];
    }

    /**
     * @return array<string>
     */
    public static function getAvailableActions()
    {
        return [
            self::ACTION_ATTACK,
            self::ACTION_DEFEND
        ];
    }
}

