<?php

namespace App\Entity;

use App\Repository\ClientPhysiqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientPhysiqueRepository::class)
 */
class ClientPhysique
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer")
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $identifiant;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $salaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $profession;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $infosEmployeur;

    /**
     * @ORM\OneToMany(targetEntity=Compte::class, mappedBy="idClientPhysique")
     */
    private $idCompte;

    public function __construct()
    {
        $this->idCompte = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
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

    public function getIdentifiant(): ?int
    {
        return $this->identifiant;
    }

    public function setIdentifiant(int $identifiant): self
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    public function getSalaire(): ?string
    {
        return $this->salaire;
    }

    public function setSalaire(?string $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(?string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getInfosEmployeur(): ?string
    {
        return $this->infosEmployeur;
    }

    public function setInfosEmployeur(?string $infosEmployeur): self
    {
        $this->infosEmployeur = $infosEmployeur;

        return $this;
    }

    /**
     * @return Collection|Compte[]
     */
    public function getIdCompte(): Collection
    {
        return $this->idCompte;
    }

    public function addIdCompte(Compte $idCompte): self
    {
        if (!$this->idCompte->contains($idCompte)) {
            $this->idCompte[] = $idCompte;
            $idCompte->setIdClientPhysique($this);
        }

        return $this;
    }

    public function removeIdCompte(Compte $idCompte): self
    {
        if ($this->idCompte->contains($idCompte)) {
            $this->idCompte->removeElement($idCompte);
            // set the owning side to null (unless already changed)
            if ($idCompte->getIdClientPhysique() === $this) {
                $idCompte->setIdClientPhysique(null);
            }
        }

        return $this;
    }
}
