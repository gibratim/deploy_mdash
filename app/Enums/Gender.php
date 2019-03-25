<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Gender extends Enum
{
    const Male = 0;
    const Female = 1;
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
            case self::Male:
                return 'Male';
            break;

            case self::Female:
                return 'Female';
            break;

            case self::Unknown:
                return 'N/A';
            break;

            default:
                return self::getKey($value);
        }

        return parent::getDescription($value);
    }

}
