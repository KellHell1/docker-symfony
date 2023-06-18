<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/qq')]
    public function main(Request $request): Response
    {
        $qwerty = $request->headers->get('authorization');

        $token = (mb_substr($qwerty, 7));

        $d = base64_decode($token);

        dd(xdebug_info());
        return $this->render('base.html.twig', []);
    }

    #[Route('/api/qwerty')]
    public function qwerty(): Response
    {
        return $this->render('base.html.twig', []);
    }
}