<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

class eIDASPartnerSession extends eIDASSession
{
    protected static function get_slot(): string
    {
        return '2';
    }

    public static function getUserData(): ?eIDASUserDataInterface
    {
        return parent::getUserData();
    }
}
