<?php

namespace ComparateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ComparateurBundle:Default:index.html.twig');
    }
}
