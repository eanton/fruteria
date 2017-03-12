<?php

namespace FrontalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontalBundle\Entity\Fruta;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$em = $this->getDoctrine()->getManager();
		
		//Recojo OBJETO de solo 1 elemento
		//$objFruta = $em->getRepository('FrontalBundle:Fruta')->find(3);
		
		//Recojo un ARRAY de TODOS los elementos
		//$arrFrutas = $em->getRepository('FrontalBundle:Fruta')->findAll();
		
		//Recojo OBJETO que cumple una condición
		//$objFruta = $em->getRepository('FrontalBundle:Fruta')->findOneBy(array('gramos' => 100));
		
		//$objFruta = $em->getRepository('FrontalBundle:Fruta')->findOneBy(array('gramos'=>100,'nombre' => 'Limon'));		
		//echo $objFruta->getNombre();
		
		//Recojo ARRAY de los elementos que cumplan una condicion
		//$arrFrutas = $em->getRepository('FrontalBundle:Fruta')->findBy(array('gramos' => 100));
		
		/*
		foreach($arrFrutas as $objFruta){
			echo $objFruta->getNombre().' - ';
		}
		*/
		
		//CREAR un OBJETO
		/*
		$objFruta = new Fruta();
		$objFruta->setNombre('Pera de roma');
		$objFruta->setDescripcion('Color marron');
		$objFruta->setFechaEntrega(new \DateTime());
		$objFruta->setEcologica(true);
		$objFruta->setGramos(125);
		
		$em->persist($objFruta);
		$em->flush();
		*/
		
		//MODIFICAR un objeto
		/*
		$objFruta = $em->getRepository('FrontalBundle:Fruta')->find(5);
		$objFruta->setDescripcion('Una pera muy sabrosa');
		$em->persist($objFruta);
		$em->flush();
		*/
		
		$arrFrutas = $em->getRepository('FrontalBundle:Fruta')->findAll();

		
        return $this->render('FrontalBundle:Default:nuevoIndex.html.twig', array('frutas' => $arrFrutas));
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
