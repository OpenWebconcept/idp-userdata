<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

interface eHerkenningUserDataInterface extends UserDataInterface
{
    public function getKvk(): string;
}
