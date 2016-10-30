<?php

namespace FrontalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontalBundle:Default:nuevoIndex.html.twig');
    }
	
	public function mipaginainicialAction()
    {
        return $this->render('FrontalBundle:Default:mipaginainicial_template.html.twig');
    }
	
		public function otranuevapaginaAction()
    {
        return $this->render('FrontalBundle:Default:otrapagina.html.twig');
    }
}
