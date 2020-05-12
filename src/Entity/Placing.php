<?php

namespace App\Entity;

use App\Repository\PlacingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlacingRepository::class)
 */
class Placing
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $User;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $Nr1;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $Nr2;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $Nr3;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $Nr4;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?string
    {
        return $this->User;
    }

    public function setUser(string $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getNr1(): ?string
    {
        return $this->Nr1;
    }

    public function setNr1(string $Nr1): self
    {
        $this->Nr1 = $Nr1;

        return $this;
    }

    public function getNr2(): ?string
    {
        return $this->Nr2;
    }

    public function setNr2(string $Nr2): self
    {
        $this->Nr2 = $Nr2;

        return $this;
    }

    public function getNr3(): ?string
    {
        return $this->Nr3;
    }

    public function setNr3(string $Nr3): self
    {
        $this->Nr3 = $Nr3;

        return $this;
    }

    public function getNr4(): ?string
    {
        return $this->Nr4;
    }

    public function setNr4(?string $Nr4): self
    {
        $this->Nr4 = $Nr4;

        return $this;
    }
}
