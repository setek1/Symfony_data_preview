<?php

namespace App\Entity;

use App\Repository\CargosEntityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CargosEntityRepository::class)]
#[ORM\Table(name: 'cargos')]
class CargosEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $grado = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $genero = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $nacionalidad = null;

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getGrado(): ?string
    {
        return $this->grado;
    }

    public function setGrado(?string $grado): self
    {
        $this->grado = $grado;

        return $this;
    }

    public function getGenero(): ?string
    {
        return $this->genero;
    }

    public function setGenero(?string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getNacionalidad(): ?string
    {
        return $this->nacionalidad;
    }

    public function setNacionalidad(?string $nacionalidad): self
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    

}