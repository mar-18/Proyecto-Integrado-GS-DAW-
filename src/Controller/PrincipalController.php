<?php

namespace App\Controller;

use App\Entity\Cliente;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PrincipalController extends AbstractController
{
    /**
     * @Route("/nosotros", name="nosotros",defaults={"_locale"="es"})
     * 
     */
    public function nosotros(Request $request, PaginatorInterface $paginator, $valor = null): Response
    {
        return $this->render('index/nosotros.html.twig');
    }
    /**
     * Funcion de prueba de ajax
     * @Route("/buscarPorNombre", options={"expose"=true}, name="buscarPorNombre")
     * @return void
     */
    public function buscarPorNombre(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            //obtengo el parametro que paso con el data en el ajax
            $nombre = $request->request->get('nombre');
            //busco el dato en repositorio
            $em = $this->getDoctrine()->getManager();
            $query = $em
                ->getRepository(Cliente::class)
                ->buscarNombre($nombre);

            /*
            return $this->renderPartial('job/list', array('jobs' => $query));
*/
            return new JsonResponse(['nombre' => $query]);
        }
        return new Response('no es xmlHttpRequest.');
    }
}
