<?php

namespace App\Controller;

use App\Entity\CargosEntity;
use App\Entity\RentasEntity;
use App\Repository\CargosEntityRepository;
use App\Repository\RentasEntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\VarDumper;
use Symfony\Component\HttpFoundation\Request;

class CargosController extends AbstractController
{
    #[Route('/cargos', name: 'app_cargos')]
    public function index(CargosEntityRepository $cargosRepository): Response
    {
        $cargos = $cargosRepository->findAll();
        return $this->render('cargos/index.html.twig', [
            'cargos'=>$cargos, 'renta'=>[]
        ]);
    }


    #[Route('/cargos/rentas', name: 'app_cargos_rentas', methods:['POST'])]
    public function rentas(Request $request, RentasEntityRepository $rentasRepository, CargosEntityRepository $cargosRepository): Response
    {
        $cargos = $cargosRepository->findAll();
        
        $cargoId=$request->get('cargo_id');
        $nombreCargo=$cargosRepository->findOneBy(['id'=>$cargoId]);
        $renta=$rentasRepository->findOneBy(['cargo_id'=>$cargoId]);
        dump($nombreCargo);
        return $this->render('cargos/index.html.twig',['cargos'=>$cargos, 'renta'=>$renta,'nCargo'=>$nombreCargo]);
    }
}
