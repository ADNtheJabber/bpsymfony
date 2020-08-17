<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compte
 *
 * @ORM\Table(name="compte", indexes={@ORM\Index(name="IDX_CFF65260DFE8647A", columns={"id_client_entreprise_id"}), @ORM\Index(name="IDX_CFF65260D1B9700C", columns={"id_client_physique_id"})})
 * @ORM\Entity
 */
class Compte
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_compte", type="string", length=255, nullable=false)
     */
    private $numeroCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="type_compte", type="string", length=255, nullable=false)
     */
    private $typeCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="frais_ouverture", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $fraisOuverture;

    /**
     * @var string
     *
     * @ORM\Column(name="remuneration", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $remuneration;

    /**
     * @var string
     *
     * @ORM\Column(name="agios", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $agios;

    /**
     * @var string
     *
     * @ORM\Column(name="date_ouverture", type="string", length=255, nullable=false)
     */
    private $dateOuverture;

    /**
     * @var string
     *
     * @ORM\Column(name="date_deblocage", type="string", length=255, nullable=false)
     */
    private $dateDeblocage;

    /**
     * @var string
     *
     * @ORM\Column(name="solde", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $solde;

    /**
     * @var \ClientPhysique
     *
     * @ORM\ManyToOne(targetEntity="ClientPhysique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client_physique_id", referencedColumnName="id")
     * })
     */
    private $idClientPhysique;

    /**
     * @var \ClientMoral
     *
     * @ORM\ManyToOne(targetEntity="ClientMoral")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client_entreprise_id", referencedColumnName="id")
     * })
     */
    private $idClientEntreprise;

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

    public function getIdClientPhysique(): ?ClientPhysique
    {
        return $this->idClientPhysique;
    }

    public function setIdClientPhysique(?ClientPhysique $idClientPhysique): self
    {
        $this->idClientPhysique = $idClientPhysique;

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


}
