<?php

namespace App\Entity;

use App\Repository\RecettesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecettesRepository::class)
 */
class Recettes
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
    private $nom_enseigne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_burger;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pain;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $viande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sauce;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fromage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEnseigne(): ?string
    {
        return $this->nom_enseigne;
    }

    public function setNomEnseigne(string $nom_enseigne): self
    {
        $this->nom_enseigne = $nom_enseigne;

        return $this;
    }

    public function getNomBurger(): ?string
    {
        return $this->nom_burger;
    }

    public function setNomBurger(string $nom_burger): self
    {
        $this->nom_burger = $nom_burger;

        return $this;
    }

    public function getPain(): ?string
    {
        return $this->pain;
    }

    public function setPain(string $pain): self
    {
        $this->pain = $pain;

        return $this;
    }

    public function getViande(): ?string
    {
        return $this->viande;
    }

    public function setViande(string $viande): self
    {
        $this->viande = $viande;

        return $this;
    }

    public function getSauce(): ?string
    {
        return $this->sauce;
    }

    public function setSauce(string $sauce): self
    {
        $this->sauce = $sauce;

        return $this;
    }

    public function getFromage(): ?string
    {
        return $this->fromage;
    }

    public function setFromage(string $fromage): self
    {
        $this->fromage = $fromage;

        return $this;
    }
}
