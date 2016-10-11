<?php

namespace landingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('landingBundle:Default:index.html.twig');
    }
    public function productosAction($numero)
      {
          return $this->render('landingBundle:Default:productos.html.twig',array('numero'=>$numero));
      }
}
