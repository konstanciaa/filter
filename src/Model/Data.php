<?php

namespace App\Model;

class Data
{
    public function __construct(
        private int $id,
        private int $nummer,
        private string $vorgangsart,
        private string $betreff,
        private string $kunde,
        private int $betrag,
    ) {

    }
    public function getId(): int
    {
        return $this->id;
    }

    public function getNummer(): int
    {
        return $this->nummer;
    }

    public function getVorgangsart(): string
    {
        return $this->vorgangsart;
    }

    public function getBetreff(): string
    {
        return $this->betreff;
    }

    public function getKunde(): string
    {
        return $this->kunde;
    }

    public function getBetrag(): int
    {
        return $this->betrag;
    }
}