<?php

namespace App\Controller;

use App\Entity\Empleado;
use App\Form\EmpleadoType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/empleado")
 */
class EmpleadoController extends AbstractController
{
    /**
     * @Route("/", name="empleado_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        //Es redundante al usar la paginación
        /*$empleados = $this->getDoctrine()
            ->getRepository(Empleado::class)
            ->findAll();*/
        $em = $this->getDoctrine()->getManager();
        $query = $em->getRepository(Empleado::class)->findAll();

        $paginacion = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*numero pag*/
            5 /*limite por pag*/
        );

        return $this->render('empleado/index.html.twig', [
            /*'empleados' => $empleados,*/
            'paginacion' =>  $paginacion
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN",message="La acción debe ser realizada por el administrador")
     * @Route("/new", name="empleado_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $empleado = new Empleado();
        $form = $this->createForm(EmpleadoType::class, $empleado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($empleado);
            $entityManager->flush();

            return $this->redirectToRoute('empleado_index');
        }

        return $this->render('empleado/new.html.twig', [
            'empleado' => $empleado,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idempleado}", name="empleado_show", methods={"GET"})
     */
    public function show(Empleado $empleado): Response
    {
        return $this->render('empleado/show.html.twig', [
            'empleado' => $empleado,
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN",message="La acción debe ser realizada por el administrador")
     * @Route("/{idempleado}/edit", name="empleado_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Empleado $empleado): Response
    {
        $form = $this->createForm(EmpleadoType::class, $empleado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('empleado_index');
        }

        return $this->render('empleado/edit.html.twig', [
            'empleado' => $empleado,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN",message="La acción debe ser realizada por el administrador")
     * @Route("/{idempleado}", name="empleado_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Empleado $empleado): Response
    {
        if ($this->isCsrfTokenValid('delete' . $empleado->getIdempleado(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($empleado);
            $entityManager->flush();
        }

        return $this->redirectToRoute('empleado_index');
    }
}
