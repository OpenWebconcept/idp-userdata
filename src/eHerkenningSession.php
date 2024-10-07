<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

class eHerkenningSession extends IdpSession
{
    protected static function get_idp(): string
    {
        return 'eherkenning';
    }

    public static function getUserData(): ?eHerkenningUserDataInterface
    {
        return parent::getUserData();
    }
}
