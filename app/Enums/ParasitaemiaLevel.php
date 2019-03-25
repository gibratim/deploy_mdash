<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ParasitaemiaLevel extends Enum
{
    const Plus = 0;
    const Plusplus = 1;
    const Plusplusplus = 2;
    const Plusplusplusplus = 3;
    const Unknown = 4;

    /**
     * Get the description for an enum value
     *
     * @param $value
     * @return string
     */
    public static function getDescription($value): string
    {
        /**
        if ($value === self::Plus) {
            return 'Malaria +';
        }
        */
        switch ($value) {
            case self::Plus:
                //return 'Malaria +';
                return 'Plus';
            break;

            case self::Plusplus:
                //return 'Malaria ++';
                return 'plus plus';
            break;

            case self::Plusplusplus:
                //return 'Malaria +++';
                return 'Plus plus plus';
            break;

            case self::Plusplusplusplus:
                //return 'Malaria +++';
                return 'Plus plus plus plus';
            break;

            default:
                return self::getKey($value);
        }

        return parent::getDescription($value);
    }
}
