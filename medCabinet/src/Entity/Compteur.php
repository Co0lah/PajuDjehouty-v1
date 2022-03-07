<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CompteurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=CompteurRepository::class)
 */
class Compteur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $annee;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numConsultation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numRdv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(?int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getNumConsultation(): ?int
    {
        return $this->numConsultation;
    }

    public function setNumConsultation(?int $numConsultation): self
    {
        $this->numConsultation = $numConsultation;

        return $this;
    }

    public function getNumRdv(): ?int
    {
        return $this->numRdv;
    }

    public function setNumRdv(?int $numRdv): self
    {
        $this->numRdv = $numRdv;

        return $this;
    }
}
