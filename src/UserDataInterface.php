<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

interface UserDataInterface
{
    public function getLevelOfAssurance(): string;
}
