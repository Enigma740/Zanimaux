<?php

namespace ZanimauxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DresseurController extends Controller
{
    public function afficheAction()
    {
        return $this->render('ZanimauxBundle:User:Dresseur.html.twig', array(
            // ...
        ));
    }
}
