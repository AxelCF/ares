<?php

namespace App\Entity;

use App\Repository\LiaisonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LiaisonRepository::class)]
class Liaison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'liaisons')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $professor = null;

    #[ORM\ManyToOne(inversedBy: 'liaisons')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Subjects $subject = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProfessor(): ?Users
    {
        return $this->professor;
    }

    public function setProfessor(?Users $professor): static
    {
        $this->professor = $professor;

        return $this;
    }

    public function getSubject(): ?Subjects
    {
        return $this->subject;
    }

    public function setSubject(?Subjects $subject): static
    {
        $this->subject = $subject;

        return $this;
    }
}
