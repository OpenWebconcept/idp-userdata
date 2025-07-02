<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

interface eHerkenningUserDataInterface extends UserDataInterface
{
    public function getKvk(): string;

    public function getBsn(): ?string;

    public function getRsin(): ?string;

    public function getVestigingsnummer(): ?string;
}
