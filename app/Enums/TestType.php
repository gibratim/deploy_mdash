<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class TestType extends Enum
{
    const LockIn90 = 0;
    const NoLockIn90 = 1;
    const LockIn360 = 2;
    const NoLockIn360 = 3;
    const Unknown = 4;

    /**
     * Get the description for an enum value
     *
     * @param $value
     * @return string
     */
    public static function getDescription($value): string
    {
        switch ($value) {
            case self::LockIn90:
                return '90 LockIn';
            break;

            case self::NoLockIn90:
                return '90 No LockIn';
            break;

            case self::LockIn360:
                return '360 LockIn';
            break;

            case self::NoLockIn360:
                return '360 No LockIn';
            break;

            default:
                return self::getKey($value);
        }

        return parent::getDescription($value);
    }
}
