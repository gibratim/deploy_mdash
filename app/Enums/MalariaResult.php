<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class MalariaResult extends Enum
{
    const Postive = 0;
    const Negative = 1;
    const Unknown = 2;

    /**
     * Get the description for an enum value
     *
     * @param $value
     * @return string
     */
    public static function getDescription($value): string
    {
        /**
        if ($value === self::Postive) {
            return 'Malaria Postive';
        }
        */

        switch ($value) {
            case self::Postive:
                return 'Postive';
            break;

            case self::Negative:
                return 'Negative';
            break;

            case self::Unknown:
                return 'Inconclusive';
            break;

            default:
                return self::getKey($value);
        }

        return parent::getDescription($value);
    }

}
