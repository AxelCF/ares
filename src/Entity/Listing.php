<?php

namespace App\Entity;

use App\Repository\ListingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListingRepository::class)]
class Listing
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Professor = null;

    #[ORM\Column]
    private ?int $Subject = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProfessor(): ?int
    {
        return $this->Professor;
    }

    public function setProfessor(int $Professor): static
    {
        $this->Professor = $Professor;

        return $this;
    }

    public function getSubject(): ?int
    {
        return $this->Subject;
    }

    public function setSubject(int $Subject): static
    {
        $this->Subject = $Subject;

        return $this;
    }
}
