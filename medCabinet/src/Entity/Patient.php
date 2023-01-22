<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PatientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PatientRepository::class)
 * @ApiResource()
 */
class Patient
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telFixe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telMobile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etatCivil;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomConjoint;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbrEnfant;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $taille;

    /**
     * @ORM\Column(type="integer")
     */
    private $poids;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $groupeSanguin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profession;

    /**
     * @ORM\Column(type="integer")
     */
    private $numSecuSocial;

    /**
     * @ORM\Column(type="integer")
     */
    private $uniqueId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $priseEnCharge;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $medecinTraitant;

    /**
     * @ORM\Column(type="date")
     */
    private $datePremierRdv;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDernierRdv;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motCles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeApci;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $regimeCnam;

    /**
     * @ORM\Column(type="date")
     */
    private $dateValidite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $qualite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nationalite;

    /**
     * @ORM\ManyToOne(targetEntity=Domaine::class)
     */
    private $domaine;

    /**
     * @ORM\ManyToOne(targetEntity=Assureur::class)
     */
    private $assureur;

    /**
     * @ORM\OneToMany(targetEntity=Rdv::class, mappedBy="patient", orphanRemoval=true)
     */
    private $rdvs;

    /**
     * @ORM\OneToMany(targetEntity=Consultation::class, mappedBy="patient", orphanRemoval=true)
     */
    private $consultations;

    /**
     * @ORM\OneToMany(targetEntity=Reglement::class, mappedBy="patient")
     */
    private $reglements;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateNaissance;

    public function __construct()
    {
        $this->rdvs = new ArrayCollection();
        $this->consultations = new ArrayCollection();
        $this->reglements = new ArrayCollection();
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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getTelFixe(): ?string
    {
        return $this->telFixe;
    }

    public function setTelFixe(string $telFixe): self
    {
        $this->telFixe = $telFixe;

        return $this;
    }

    public function getTelMobile(): ?string
    {
        return $this->telMobile;
    }

    public function setTelMobile(string $telMobile): self
    {
        $this->telMobile = $telMobile;

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

    public function getEtatCivil(): ?string
    {
        return $this->etatCivil;
    }

    public function setEtatCivil(string $etatCivil): self
    {
        $this->etatCivil = $etatCivil;

        return $this;
    }

    public function getNomConjoint(): ?string
    {
        return $this->nomConjoint;
    }

    public function setNomConjoint(string $nomConjoint): self
    {
        $this->nomConjoint = $nomConjoint;

        return $this;
    }

    public function getNbrEnfant(): ?int
    {
        return $this->nbrEnfant;
    }

    public function setNbrEnfant(int $nbrEnfant): self
    {
        $this->nbrEnfant = $nbrEnfant;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(int $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getGroupeSanguin(): ?string
    {
        return $this->groupeSanguin;
    }

    public function setGroupeSanguin(string $groupeSanguin): self
    {
        $this->groupeSanguin = $groupeSanguin;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getNumSecuSocial(): ?int
    {
        return $this->numSecuSocial;
    }

    public function setNumSecuSocial(int $numSecuSocial): self
    {
        $this->numSecuSocial = $numSecuSocial;

        return $this;
    }

    public function getUniqueId(): ?int
    {
        return $this->uniqueId;
    }

    public function setUniqueId(int $uniqueId): self
    {
        $this->uniqueId = $uniqueId;

        return $this;
    }

    public function getPriseEnCharge(): ?string
    {
        return $this->priseEnCharge;
    }

    public function setPriseEnCharge(string $priseEnCharge): self
    {
        $this->priseEnCharge = $priseEnCharge;

        return $this;
    }

    public function getMedecinTraitant(): ?string
    {
        return $this->medecinTraitant;
    }

    public function setMedecinTraitant(string $medecinTraitant): self
    {
        $this->medecinTraitant = $medecinTraitant;

        return $this;
    }

    public function getDatePremierRdv(): ?\DateTimeInterface
    {
        return $this->datePremierRdv;
    }

    public function setDatePremierRdv(\DateTimeInterface $datePremierRdv): self
    {
        $this->datePremierRdv = $datePremierRdv;

        return $this;
    }

    public function getDateDernierRdv(): ?\DateTimeInterface
    {
        return $this->dateDernierRdv;
    }

    public function setDateDernierRdv(\DateTimeInterface $dateDernierRdv): self
    {
        $this->dateDernierRdv = $dateDernierRdv;

        return $this;
    }

    public function getMotCles(): ?string
    {
        return $this->motCles;
    }

    public function setMotCles(string $motCles): self
    {
        $this->motCles = $motCles;

        return $this;
    }

    public function getCodeApci(): ?string
    {
        return $this->codeApci;
    }

    public function setCodeApci(string $codeApci): self
    {
        $this->codeApci = $codeApci;

        return $this;
    }

    public function getRegimeCnam(): ?string
    {
        return $this->regimeCnam;
    }

    public function setRegimeCnam(string $regimeCnam): self
    {
        $this->regimeCnam = $regimeCnam;

        return $this;
    }

    public function getDateValidite(): ?\DateTimeInterface
    {
        return $this->dateValidite;
    }

    public function setDateValidite(\DateTimeInterface $dateValidite): self
    {
        $this->dateValidite = $dateValidite;

        return $this;
    }

    public function getQualite(): ?string
    {
        return $this->qualite;
    }

    public function setQualite(?string $qualite): self
    {
        $this->qualite = $qualite;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(?string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getDomaine(): ?Domaine
    {
        return $this->domaine;
    }

    public function setDomaine(?Domaine $domaine): self
    {
        $this->domaine = $domaine;

        return $this;
    }

    public function getAssureur(): ?Assureur
    {
        return $this->assureur;
    }

    public function setAssureur(?Assureur $assureur): self
    {
        $this->assureur = $assureur;

        return $this;
    }

    /**
     * @return Collection|Rdv[]
     */
    public function getRdvs(): Collection
    {
        return $this->rdvs;
    }

    public function addRdv(Rdv $rdv): self
    {
        if (!$this->rdvs->contains($rdv)) {
            $this->rdvs[] = $rdv;
            $rdv->setPatient($this);
        }

        return $this;
    }

    public function removeRdv(Rdv $rdv): self
    {
        if ($this->rdvs->removeElement($rdv)) {
            // set the owning side to null (unless already changed)
            if ($rdv->getPatient() === $this) {
                $rdv->setPatient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Consultation[]
     */
    public function getConsultations(): Collection
    {
        return $this->consultations;
    }

    public function addConsultation(Consultation $consultation): self
    {
        if (!$this->consultations->contains($consultation)) {
            $this->consultations[] = $consultation;
            $consultation->setPatient($this);
        }

        return $this;
    }

    public function removeConsultation(Consultation $consultation): self
    {
        if ($this->consultations->removeElement($consultation)) {
            // set the owning side to null (unless already changed)
            if ($consultation->getPatient() === $this) {
                $consultation->setPatient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Reglement[]
     */
    public function getReglements(): Collection
    {
        return $this->reglements;
    }

    public function addReglement(Reglement $reglement): self
    {
        if (!$this->reglements->contains($reglement)) {
            $this->reglements[] = $reglement;
            $reglement->setPatient($this);
        }

        return $this;
    }

    public function removeReglement(Reglement $reglement): self
    {
        if ($this->reglements->removeElement($reglement)) {
            // set the owning side to null (unless already changed)
            if ($reglement->getPatient() === $this) {
                $reglement->setPatient(null);
            }
        }

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }
}
