<?php

namespace App\Entity;

use App\Repository\FinanzbuchhaltungRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FinanzbuchhaltungRepository::class)]
class Finanzbuchhaltung
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nummer = null;

    #[ORM\Column(length: 255)]
    private ?string $vorgangsart = null;

    #[ORM\Column(length: 255)]
    private ?string $betreff = null;

    #[ORM\Column(length: 255)]
    private ?string $kunde = null;

    #[ORM\Column]
    private ?float $betrag = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNummer(): ?int
    {
        return $this->nummer;
    }

    public function setNummer(int $nummer): static
    {
        $this->nummer = $nummer;

        return $this;
    }

    public function getVorgangsart(): ?string
    {
        return $this->vorgangsart;
    }

    public function setVorgangsart(string $vorgangsart): static
    {
        $this->vorgangsart = $vorgangsart;

        return $this;
    }

    public function getBetreff(): ?string
    {
        return $this->betreff;
    }

    public function setBetreff(string $betreff): static
    {
        $this->betreff = $betreff;

        return $this;
    }

    public function getKunde(): ?string
    {
        return $this->kunde;
    }

    public function setKunde(string $kunde): static
    {
        $this->kunde = $kunde;

        return $this;
    }

    public function getBetrag(): ?float
    {
        return $this->betrag;
    }

    public function setBetrag(float $betrag): static
    {
        $this->betrag = $betrag;

        return $this;
    }
}
