<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

class DigiDSession extends IdpSession
{
    protected static function get_idp(): string
    {
        return Idp::DIGID;
    }

    public static function getUserData(): ?DigiDUserData
    {
        return parent::getUserData();
    }
}
