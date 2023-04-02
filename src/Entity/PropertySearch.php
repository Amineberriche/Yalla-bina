<?php

namespace App\Entity;

class PropertySearch {

    private $depart;

    private $arrivee;

    private $date_depart;

    private $passager;

    public function getDepart(): ?string
    {
        return $this->depart;
    }

    public function setDepart(string $depart): self
    {
        $this->depart = $depart;

        return $this;
    }

    public function getArrivee(): ?string
    {
        return $this->arrivee;
    }

    public function setArrivee(string $arrivee): self
    {
        $this->arrivee = $arrivee;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->date_depart;
    }
    

    public function setDateDepart(\DateTimeInterface $date_depart): self
    {
        $this->date_depart = $date_depart;

        return $this;
    }

    public function getPassager(): ?string
    {
        return $this->passager;
    }

    public function setPassager(string $passager): self
    {
        $this->passager = $passager;

        return $this;
    }

}