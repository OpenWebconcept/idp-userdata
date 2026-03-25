<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

class eHerkenningPartnerSession extends eHerkenningSession
{
    protected static function get_slot(): string
    {
        return '2';
    }

    public static function getUserData(): ?eHerkenningUserDataInterface
    {
        return parent::getUserData();
    }
}
