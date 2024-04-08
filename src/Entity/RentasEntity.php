<?php

namespace App\Entity;

use App\Repository\RentasEntityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RentasEntityRepository::class)]
#[ORM\Table(name: 'rentas')]
class RentasEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;
    #[ORM\Column(type: 'integer')]
    private ?int $cargo_id= null;
    #[ORM\Column(type: 'integer')]
    private ?int $renta_bruta = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCargo_id(): ?int
    {
        return $this->cargo_id;
    }
    
    public function setCargo_id(?int $cargo_id) :self
    {
       $this->cargo_id=$cargo_id;
       return $this;
    }


    public function getRenta_bruta(): ?int
    {
        return $this->renta_bruta;
    }

    public function setRenta_bruta(?int $renta_bruta) :self
    {
       $this->renta_bruta=$renta_bruta;
       return $this;
    }
}
