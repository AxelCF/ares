<?php

namespace App\Entity;

use App\Repository\SubjectsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubjectsRepository::class)]
class Subjects
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'subject', targetEntity: Liaison::class)]
    private Collection $liaisons;

    public function __construct()
    {
        $this->liaisons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Liaison>
     */
    public function getLiaisons(): Collection
    {
        return $this->liaisons;
    }

    public function addLiaison(Liaison $liaison): static
    {
        if (!$this->liaisons->contains($liaison)) {
            $this->liaisons->add($liaison);
            $liaison->setSubject($this);
        }

        return $this;
    }

    public function removeLiaison(Liaison $liaison): static
    {
        if ($this->liaisons->removeElement($liaison)) {
            // set the owning side to null (unless already changed)
            if ($liaison->getSubject() === $this) {
                $liaison->setSubject(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->getName();
    }
}
