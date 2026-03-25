<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

class DigiDPartnerSession extends DigiDSession
{
    protected static function get_slot(): string
    {
        return '2';
    }

    public static function getUserData(): ?DigiDUserDataInterface
    {
        return parent::getUserData();
    }
}
