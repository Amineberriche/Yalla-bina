<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Traget::class, inversedBy="reservations")
     * @ORM\JoinColumn(name="id_traget", referencedColumnName="id_traget", onDelete="CASCADE")
     */
    private $id_traget;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $nbrplaces;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reservations")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTraget(): ?Traget
    {
        return $this->id_traget;
    }

    public function setIdTraget(?Traget $id_traget): self
    {
        $this->id_traget = $id_traget;

        return $this;
    }

    public function getNbrplaces(): ?int
    {
        return $this->nbrplaces;
    }

    public function setNbrplaces(int $nbrplaces): self
    {
        $this->nbrplaces = $nbrplaces;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
    public function __toString()
    {
        return $this->nbrplaces;

    }
}
