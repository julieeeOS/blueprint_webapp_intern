<?php

namespace App\Controller;

use App\Entity\Device;
use App\Repository\DeviceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DeviceController extends AbstractController
{
    #[Route('/device', name: 'app_device')]
    public function index(DeviceRepository $deviceRepository): Response
    {
        $devices = $deviceRepository->findAll();

        return $this->render('device/index.html.twig', [
            'devices'=> $devices
        ]);
    }
}
