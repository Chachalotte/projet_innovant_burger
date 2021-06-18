<?php

namespace App\Entity;

use App\Repository\IngredientsRepository;
use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity(repositoryClass=IngredientsRepository::class)
 */
class Ingredients
{

    public function __toString()
    {
        return $this->nom_ingredient;
    }

   
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_ingredient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNomIngredient(): ?string
    {
        return $this->nom_ingredient;
    }

    public function setNomIngredient(string $nom_ingredient): self
    {
        $this->nom_ingredient = $nom_ingredient;

        return $this;
    }

}
