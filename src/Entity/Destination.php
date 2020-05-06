<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DestinationRepository")
 */
class Destination
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=50)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $des_dest;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ville", mappedBy="code_dest",cascade={"all"})
     */
    private $villes;

    public function __construct()
    {
        $this->villes = new ArrayCollection();
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

    public function getCodeDest(): ?string
    {
        return $this->code_dest;
    }

    public function setCodeDest(string $code_dest): self
    {
        $this->code_dest = $code_dest;

        return $this;
    }

    public function getDesDest(): ?string
    {
        return $this->des_dest;
    }

    public function setDesDest(string $des_dest): self
    {
        $this->des_dest = $des_dest;

        return $this;
    }

    /**
     * @return Collection|Ville[]
     */
    public function getVilles(): Collection
    {
        return $this->villes;
    }

    public function addVille(Ville $ville): self
    {
        if (!$this->villes->contains($ville)) {
            $this->villes[] = $ville;
            $ville->setCodeDest($this);
        }

        return $this;
    }

    public function removeVille(Ville $ville): self
    {
        if ($this->villes->contains($ville)) {
            $this->villes->removeElement($ville);
            // set the owning side to null (unless already changed)
            if ($ville->getCodeDest() === $this) {
                $ville->setCodeDest(null);
            }
        }

        return $this;
    }

    public function __toString(): ?string
    {
        return $this->getDesDest();
    }
}
