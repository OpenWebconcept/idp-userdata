<?php

namespace OWC\IdpUserData;

class DigiDUserData extends UserData
{
    protected string $bsn;

    public function getBsn(): string
    {
        return $this->bsn;
    }

}