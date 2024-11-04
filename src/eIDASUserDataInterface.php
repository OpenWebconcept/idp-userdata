<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

interface eIDASUserDataInterface extends UserDataInterface
{
    public function getBsn(): string;
}
