<?php

namespace App\Controller;

use App\Entity\Decoracion;
use App\Form\DecoracionType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/decoracion")
 */
class DecoracionController extends AbstractController
{
    /**
     * @Route("/", name="decoracion_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em
            ->getRepository(Decoracion::class)
            ->findAll();

        $paginacion = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*numero pag*/
            10 /*limite por pag*/
        );

        return $this->render('decoracion/index.html.twig', [
            'paginacion' =>  $paginacion
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN",message="La acción debe ser realizada por el administrador")
     * @Route("/new", name="decoracion_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $decoracion = new Decoracion();
        $form = $this->createForm(DecoracionType::class, $decoracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($decoracion);
            $entityManager->flush();

            return $this->redirectToRoute('decoracion_index');
        }

        return $this->render('decoracion/new.html.twig', [
            'decoracion' => $decoracion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{iddecoracion}", name="decoracion_show", methods={"GET"})
     */
    public function show(Decoracion $decoracion): Response
    {
        return $this->render('decoracion/show.html.twig', [
            'decoracion' => $decoracion,
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN",message="La acción debe ser realizada por el administrador")
     * @Route("/{iddecoracion}/edit", name="decoracion_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Decoracion $decoracion): Response
    {
        $form = $this->createForm(DecoracionType::class, $decoracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('decoracion_index');
        }

        return $this->render('decoracion/edit.html.twig', [
            'decoracion' => $decoracion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN",message="La acción debe ser realizada por el administrador")
     * @Route("/{iddecoracion}", name="decoracion_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Decoracion $decoracion): Response
    {
        if ($this->isCsrfTokenValid('delete' . $decoracion->getIddecoracion(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($decoracion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('decoracion_index');
    }
}
