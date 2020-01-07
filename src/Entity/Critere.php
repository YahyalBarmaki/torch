<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CritereRepository")
 */
class Critere
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
     * @ORM\OneToMany(targetEntity="App\Entity\PersonneCritere", mappedBy="critere")
     */
    private $idCritere;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SousCritere", mappedBy="critere")
     */
    private $idCriter;

    public function __construct()
    {
        $this->idCritere = new ArrayCollection();
        $this->idCriter = new ArrayCollection();
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

    /**
     * @return Collection|PersonneCritere[]
     */
    public function getIdCritere(): Collection
    {
        return $this->idCritere;
    }

    public function addIdCritere(PersonneCritere $idCritere): self
    {
        if (!$this->idCritere->contains($idCritere)) {
            $this->idCritere[] = $idCritere;
            $idCritere->setCritere($this);
        }

        return $this;
    }

    public function removeIdCritere(PersonneCritere $idCritere): self
    {
        if ($this->idCritere->contains($idCritere)) {
            $this->idCritere->removeElement($idCritere);
            // set the owning side to null (unless already changed)
            if ($idCritere->getCritere() === $this) {
                $idCritere->setCritere(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SousCritere[]
     */
    public function getIdCriter(): Collection
    {
        return $this->idCriter;
    }

    public function addIdCriter(SousCritere $idCriter): self
    {
        if (!$this->idCriter->contains($idCriter)) {
            $this->idCriter[] = $idCriter;
            $idCriter->setCritere($this);
        }

        return $this;
    }

    public function removeIdCriter(SousCritere $idCriter): self
    {
        if ($this->idCriter->contains($idCriter)) {
            $this->idCriter->removeElement($idCriter);
            // set the owning side to null (unless already changed)
            if ($idCriter->getCritere() === $this) {
                $idCriter->setCritere(null);
            }
        }

        return $this;
    }
}
