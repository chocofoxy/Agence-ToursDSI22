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
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $code_ville_etape;

    /**
     * @ORM\Column(type="integer")
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeVilleEtape(): ?int
    {
        return $this->code_ville_etape;
    }

    public function setCodeVilleEtape(int $code_ville_etape): self
    {
        $this->code_ville_etape = $code_ville_etape;

        return $this;
    }

    public function getCodeCircuitEtape(): ?int
    {
        return $this->code_circuit_etape;
    }

    public function setCodeCircuitEtape(int $code_circuit_etape): self
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
