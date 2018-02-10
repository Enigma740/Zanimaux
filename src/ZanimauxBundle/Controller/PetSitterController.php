<?php

namespace ZanimauxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PetSitterController extends Controller
{
    public function affichepAction()
    {
        return $this->render('ZanimauxBundle:User:petSitter.html.twig', array(
            // ...
        ));
    }
}
