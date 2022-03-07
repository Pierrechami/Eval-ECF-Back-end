<?php

namespace App\Entity;

use App\Repository\CandidateRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidateRepository::class)
 */
class Candidate
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
    private $first_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="candidates")
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cv;

    /**
     * @ORM\ManyToMany(targetEntity=Job::class, inversedBy="candidates")
     */
    private $apply_job;

    public function __construct()
    {
        $this->apply_job = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCv()
    {
        return $this->cv;
    }

    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * @return Collection|Job[]
     */
    public function getApplyJob(): Collection
    {
        return $this->apply_job;
    }

    public function addApplyJob(Job $applyJob): self
    {
        if (!$this->apply_job->contains($applyJob)) {
            $this->apply_job[] = $applyJob;
        }

        return $this;
    }

    public function removeApplyJob(Job $applyJob): self
    {
        $this->apply_job->removeElement($applyJob);

        return $this;
    }

    public function __toString()
    {
        // to show the name of the Category in the select
        return (string) $this->name;
        // to show the id of the Category in the select
        // return $this->id;
    }

}
