<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

class eIDASUserData extends UserData
{
    protected string $bsn;

    public function getBsn(): string {
        return $this->bsn;
    }
}
