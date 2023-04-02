<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;



/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields="email", message="Email already taken")
 * @Orm\Table(name="`Option`")
 * @UniqueEntity(fields="username", message="Username already taken")
 */


class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

       /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;
    
      /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;
 
      /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $telephone;


      /**
     * @ORM\Column(type="array")
     */
    private $roles;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="user")
     */
    private $reservations;


    public function __construct()
    {
        $this->roles = array('ROLE_USER');
        $this->reservations = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }
    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
 
    
    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }
    
    public function getSalt()
    {
        // The bcrypt and argon2i algorithms don't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function eraseCredentials()
    {
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
            $reservation->setUser($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getUser() === $this) {
                $reservation->setUser(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->email;

    }
   

}
