<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EtapeCircuitRepository")
 */
class EtapeCircuit
{

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Ville", inversedBy="etapeCircuits",cascade={"all"})
     */
    private $code_ville_etape;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Circuit", inversedBy="etapeCircuits",cascade={"all"})
     */
    private $code_circuit_etape;

    /**
     * @ORM\Column(type="integer")
     */
    private $duree_etape;

    /**
     * @ORM\Column(type="integer")
     */
    private $ordre_etape;

    public function getId(): ?Ville
    {
        return $this->id;
    }

    public function setId(?Ville $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCodeVilleEtape(): ?Ville
    {
        return $this->code_ville_etape;
    }

    public function getcode_ville_etape(): ?Ville
    {
        return $this->code_ville_etape;
    }

    public function setCodeVilleEtape(?Ville $code_ville_etape): self
    {
        $this->code_ville_etape = $code_ville_etape;

        return $this;
    }

    public function setcode_ville_etape(?Ville $code_ville_etape): self
    {
        $this->code_ville_etape = $code_ville_etape;

        return $this;
    }

    public function getcode_circuit_etape(): ?Circuit
    {
        return $this->code_circuit_etape;
    }

    public function setcode_circuit_etape(?Circuit $code_circuit_etape): self
    {
        $this->code_circuit_etape = $code_circuit_etape;

        return $this;
    }

    public function getCodeCircuitEtape(): ?Circuit
    {
        return $this->code_circuit_etape;
    }

    public function setCodeCircuitEtape(?Circuit $code_circuit_etape): self
    {
        $this->code_circuit_etape = $code_circuit_etape;

        return $this;
    }

    public function getDureeEtape(): ?int
    {
        return $this->duree_etape;
    }

    public function setDureeEtape(int $duree_etape): self
    {
        $this->duree_etape = $duree_etape;

        return $this;
    }

    public function getOrdreEtape(): ?int
    {
        return $this->ordre_etape;
    }

    public function setOrdreEtape(int $ordre_etape): self
    {
        $this->ordre_etape = $ordre_etape;

        return $this;
    }
}
