<?php

namespace App\Controller;

use App\Entity\Media;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PreferenceController extends AbstractController
{
    #[Route('/preference', name: 'preference')]
    public function preference(Media $media)
    {
        return $this->render('registration/preference.html.twig', [
            'articles' => $media,
        ]);
    }


}
