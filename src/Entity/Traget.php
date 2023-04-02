<?php

namespace App\Entity;

use App\Repository\TragetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=TragetRepository::class)
 *  @Orm\Table(name="`traget`")
 * 
 */
class Traget
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id_traget;

    /**
     * @ORM\Column(name="depart" , type="string", length=255 , nullable=true)
     */
    private $depart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $arrivee;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $passager;

    /**
     * @ORM\Column(type="date")
     */
    private $date_depart;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_depart;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_arrivee;

      /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="traget")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="id_traget")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $reservations;


    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getIdTraget(): ?int
    {
        return $this->id_traget;
    }

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

    public function getPassager(): ?string
    {
        return $this->passager;
    }

    public function setPassager(string $passager): self
    {
        $this->passager = $passager;

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

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getHeureDepart(): ?\DateTimeInterface
    {
        return $this->heure_depart;
    }

    public function setHeureDepart(\DateTimeInterface $heure_depart): self
    {
        $this->heure_depart = $heure_depart;

        return $this;
    }

    public function getHeureArrivee(): ?\DateTimeInterface
    {
        return $this->heure_arrivee;
    }

    public function setHeureArrivee(\DateTimeInterface $heure_arrivee): self
    {
        $this->heure_arrivee = $heure_arrivee;

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

    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setIdTraget($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getIdTraget() === $this) {
                $reservation->setIdTraget(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->depart;

    }
   
}
