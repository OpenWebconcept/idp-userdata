<?php

namespace OWC\IdpUserData;

class eHerkenningUserdata extends UserData
{
    protected string $kvk;

    protected ?string $rsin = null;

    protected ?string $vestigingsnummer = null;

    protected ?string $bsn = null;

    public function getKvk(): string
    {
        return $this->kvk;
    }

    public function getBsn(): string
    {
        return $this->bsn;
    }

    public function getRsin(): ?string {
        return $this->rsin;
    }

    public function getVestigingsnummer(): ?string {
        return $this->vestigingsnummer;
    }
}