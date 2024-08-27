<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

interface DigiDUserDataInterface extends UserDataInterface
{
    public function getBsn(): string;
}
