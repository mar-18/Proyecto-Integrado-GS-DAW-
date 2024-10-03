<?php

namespace App\Controller;

use App\Entity\Salon;
use App\Form\SalonType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//excepcion al subir un archivo
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/salon")
 */
class SalonController extends AbstractController
{
    /**
     * @Route("/", name="salon_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em
            ->getRepository(Salon::class)
            ->findAll();

        $paginacion = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*numero pag*/
            4 /*limite por pag*/
        );

        return $this->render('salon/index.html.twig', [
            'paginacion' =>  $paginacion
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN",message="La acción debe ser realizada por el administrador")
     * @Route("/new", name="salon_new", methods={"GET","POST"})
     */
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $salon = new Salon();
        $form = $this->createForm(SalonType::class, $salon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fotoFile = $form->get('foto')->getData();
            // 
            if ($fotoFile) {
                $originalFilename = pathinfo($fotoFile->getClientOriginalName(), PATHINFO_FILENAME);
                // esto es necesario para incluir de manera segura el nombre del archivo como parte de la URL
                $safeFilename = $slugger->slug($originalFilename);
                $nuevaFoto = $safeFilename . '-' . uniqid() . '.' . $fotoFile->guessExtension();

                //Mueve la foto al directorio especificado en config/services.yaml
                try {
                    $fotoFile->move(
                        $this->getParameter('directorio_imagenes'),
                        $nuevaFoto
                    );
                } catch (FileException $e) {
                    throw new \Exception("Ha ocurrido un error al subir la foto");
                }
                //si existe un archivo lo guarda con este nombre: nuevaFoto

                $salon->setFoto($nuevaFoto);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($salon);
            $entityManager->flush();

            return $this->redirectToRoute('salon_index');
        }

        return $this->render('salon/new.html.twig', [
            'salon' => $salon,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idsalon}", name="salon_show", methods={"GET"})
     */
    public function show(Salon $salon): Response
    {
        return $this->render('salon/show.html.twig', [
            'salon' => $salon,
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN",message="La acción debe ser realizada el administrador")
     * @Route("/{idsalon}/edit", name="salon_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Salon $salon): Response
    {
        $form = $this->createForm(SalonType::class, $salon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('salon_index');
        }

        return $this->render('salon/edit.html.twig', [
            'salon' => $salon,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN",message="La acción debe ser realizada por el administrador")
     * @Route("/{idsalon}", name="salon_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Salon $salon): Response
    {
        if ($this->isCsrfTokenValid('delete' . $salon->getIdsalon(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($salon);
            $entityManager->flush();
        }

        return $this->redirectToRoute('salon_index');
    }
}
