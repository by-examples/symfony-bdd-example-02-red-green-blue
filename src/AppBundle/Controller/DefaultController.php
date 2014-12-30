<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function redAction()
    {
        return $this->render('default/red.html.twig');
    }

    /**
     * @Route("/green.html", name="green")
     */
    public function greenAction()
    {
        return $this->render('default/green.html.twig');
    }

    /**
     * @Route("/blue.html", name="blue")
     */
    public function blueAction()
    {
        return $this->render('default/blue.html.twig');
    }

}
