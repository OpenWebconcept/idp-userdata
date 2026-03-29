<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

class eHerkenningSession extends IdpSession
{
    protected static function get_idp(): string
    {
        return Idp::EHERKENNING;
    }

    public static function getUserData(): ?eHerkenningUserData
    {
        return parent::getUserData();
    }
}
