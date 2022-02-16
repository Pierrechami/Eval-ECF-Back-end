<?php

namespace App\Entity;

use App\Repository\JobRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobRepository::class)
 */
class Job
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_contrat;

    /**
     * @ORM\Column(type="datetime")
     */
    private $start_date;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $end_date;

    /**
     * @ORM\Column(type="integer")
     */
    private $time;

    /**
     * @ORM\Column(type="integer")
     */
    private $salary;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $to_apply;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $is_accepted;


    /**
     * @ORM\ManyToOne(targetEntity=Recruiter::class, inversedBy="jobs")
     * @ORM\JoinColumn(nullable=false , onDelete="CASCADE" , unique=false)
     */
    private  $recruiter;

    // , orphanRemoval=true
    /**
     * @ORM\ManyToMany(targetEntity=Candidate::class, mappedBy="apply_job" )
     */
    private $candidates;

    public function __construct()
    {
        $this->candidates = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTypeContrat(): ?string
    {
        return $this->type_contrat;
    }

    public function setTypeContrat(string $type_contrat): self
    {
        $this->type_contrat = $type_contrat;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): self
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(?\DateTimeInterface $end_date): self
    {
        $this->end_date = $end_date;

        return $this;
    }

    public function getTime(): ?int
    {
        return $this->time;
    }


    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getSalary(): ?int
    {
        return $this->salary;
    }

    public function setSalary(int $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getToApply(): ?bool
    {
        return $this->to_apply;
    }

    public function setToApply(?bool $to_apply): self
    {
        $this->to_apply = $to_apply;

        return $this;
    }

    public function getIsAccepted(): ?bool
    {
        return $this->is_accepted;
    }

    public function setIsAccepted(?bool $is_accepted): self
    {
        $this->is_accepted = $is_accepted;

        return $this;
    }


    /**
     * @return Collection|Candidate[]
     */
    public function getCandidates(): Collection
    {
        return $this->candidates;
    }

    public function addCandidate(Candidate $candidate): self
    {
        if (!$this->candidates->contains($candidate)) {
            $this->candidates[] = $candidate;
            $candidate->addApplyJob($this);
        }

        return $this;
    }

    public function removeCandidate(Candidate $candidate): self
    {
        if ($this->candidates->removeElement($candidate)) {
            $candidate->removeApplyJob($this);
        }

        return $this;
    }

    public function __toString()
    {
        // to show the name of the Category in the select
        return (string) $this->title;
        // to show the id of the Category in the select
        // return $this->id;
    }


//: ?Recruiter
        public function getRecruiter()
    {
      return $this->recruiter;
    }

    // ?Recruiter
    public function setRecruiter( $recruiter): self
    {
      $this->recruiter = $recruiter;

      return $this;
    }



}
