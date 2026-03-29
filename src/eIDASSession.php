<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

class eIDASSession extends IdpSession
{
    protected static function get_idp(): string
    {
        return Idp::EIDAS;
    }

    public static function getUserData(): ?eIDASUserData
    {
        return parent::getUserData();
    }
}
