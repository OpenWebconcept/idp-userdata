<?php

namespace OWC\IdpUserData;

class DigiDSession extends IdpSession
{
    protected static function get_idp(): string {
        return 'digid';
    }

    public static function getUserData(): ?DigiDUserDataInterface
    {
        return parent::getUserData();
    }
}
