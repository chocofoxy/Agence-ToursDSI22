<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VilleRepository")
 */
class Ville
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=50)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $des_ville;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Destination", inversedBy="villes",cascade={"all"})
     */
    private $code_dest;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EtapeCircuit", mappedBy="code_ville_etape",cascade={"all"})
     */
    private $etapeCircuits;

    public function __construct()
    {
        $this->etapeCircuits = new ArrayCollection();
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id ;

        return $this;
    }

    public function getCodeVille(): ?string
    {
        return $this->code_ville;
    }

    public function setCodeVille(string $code_ville): self
    {
        $this->code_ville = $code_ville;

        return $this;
    }

    public function getDesVille(): ?string
    {
        return $this->des_ville;
    }

    public function setDesVille(string $des_ville): self
    {
        $this->des_ville = $des_ville;

        return $this;
    }

    public function getCodeDest(): ?Destination
    {
        return $this->code_dest;
    }

    public function setCodeDest(?Destination $code_dest): self
    {
        $this->code_dest = $code_dest;

        return $this;
    }

    /**
     * @return Collection|EtapeCircuit[]
     */
    public function getEtapeCircuits(): Collection
    {
        return $this->etapeCircuits;
    }

    public function addEtapeCircuit(EtapeCircuit $etapeCircuit): self
    {
        if (!$this->etapeCircuits->contains($etapeCircuit)) {
            $this->etapeCircuits[] = $etapeCircuit;
            $etapeCircuit->setCodeVilleEtape($this);
        }

        return $this;
    }

    public function removeEtapeCircuit(EtapeCircuit $etapeCircuit): self
    {
        if ($this->etapeCircuits->contains($etapeCircuit)) {
            $this->etapeCircuits->removeElement($etapeCircuit);
            // set the owning side to null (unless already changed)
            if ($etapeCircuit->getCodeVilleEtape() === $this) {
                $etapeCircuit->setCodeVilleEtape(null);
            }
        }

        return $this;
    }

    public function __toString(): ?string
    {
        return $this->getDesVille();
    }
}
