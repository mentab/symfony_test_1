<?php

namespace AppBundle\Enum;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameObjectActionEnum
 */
class GameObjectActionEnum
{
	const ACTION_ATK = "atk";
    const ACTION_UPG = "upg";
    const ACTION_INC = "inc";

	/** @var array user friendly named action */
    protected static $actionName = [
        self::ACTION_ATK  => 'Attack',
        self::ACTION_UPG  => 'Upgrade',
        self::ACTION_INC  => 'Increase'
    ];

    /**
     * @param  string $actionShortName
     * @return string
     */
    public static function getActionName($actionShortName)
    {
        if (!isset(static::$actionName[$actionShortName])) {
            return "Unknown action ($actionShortName)";
        }

        return static::$actionName[$actionShortName];
    }

    /**
     * @return array<string>
     */
    public static function getAvailableActions()
    {
        return [
            self::ACTION_ATK,
            self::ACTION_UPG,
            self::ACTION_INC
        ];
    }
}