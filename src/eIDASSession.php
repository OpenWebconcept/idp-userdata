<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

class eIDASSession extends IdpSession
{
    protected static function get_idp(): string
    {
        return 'eidas';
    }

    public static function getUserData(): ?eIDASUserDataInterface
    {
        return parent::getUserData();
    }
}
