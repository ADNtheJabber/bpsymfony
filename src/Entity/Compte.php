<?php

namespace App\Entity;

use App\Repository\CompteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 */
class Compte
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
    private $numeroCompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeCompte;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $fraisOuverture;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $remuneration;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $agios;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateOuverture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateDeblocage;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $solde;

    /**
     * @ORM\ManyToOne(targetEntity=ClientMoral::class, inversedBy="idCompte")
     */
    private $idClientEntreprise;

    /**
     * @ORM\ManyToOne(targetEntity=ClientPhysique::class, inversedBy="idCompte")
     */
    private $idClientPhysique;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroCompte(): ?string
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte(string $numeroCompte): self
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }

    public function getTypeCompte(): ?string
    {
        return $this->typeCompte;
    }

    public function setTypeCompte(string $typeCompte): self
    {
        $this->typeCompte = $typeCompte;

        return $this;
    }

    public function getFraisOuverture(): ?string
    {
        return $this->fraisOuverture;
    }

    public function setFraisOuverture(string $fraisOuverture): self
    {
        $this->fraisOuverture = $fraisOuverture;

        return $this;
    }

    public function getRemuneration(): ?string
    {
        return $this->remuneration;
    }

    public function setRemuneration(string $remuneration): self
    {
        $this->remuneration = $remuneration;

        return $this;
    }

    public function getAgios(): ?string
    {
        return $this->agios;
    }

    public function setAgios(string $agios): self
    {
        $this->agios = $agios;

        return $this;
    }

    public function getDateOuverture(): ?string
    {
        return $this->dateOuverture;
    }

    public function setDateOuverture(string $dateOuverture): self
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }

    public function getDateDeblocage(): ?string
    {
        return $this->dateDeblocage;
    }

    public function setDateDeblocage(string $dateDeblocage): self
    {
        $this->dateDeblocage = $dateDeblocage;

        return $this;
    }

    public function getSolde(): ?string
    {
        return $this->solde;
    }

    public function setSolde(string $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    
    public function getIdClientEntreprise(): ?ClientMoral
    {
        return $this->idClientEntreprise;
    }

    public function setIdClientEntreprise(?ClientMoral $idClientEntreprise): self
    {
        $this->idClientEntreprise = $idClientEntreprise;

        return $this;
    }

    public function getIdClientPhysique(): ?ClientPhysique
    {
        return $this->idClientPhysique;
    }

    public function setIdClientPhysique(?ClientPhysique $idClientPhysique): self
    {
        $this->idClientPhysique = $idClientPhysique;

        return $this;
    }
}
