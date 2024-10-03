<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;
use PhpParser\Builder\Use_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * 
     * 
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator, UserRepository $userRepository): Response
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em
            ->getRepository(User::class)
            ->findAll();

        $paginacion = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*numero pag*/
            10 /*limite por pag*/
        );

        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
            'paginacion' =>  $paginacion
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN",message="La acción debe ser realizada por el administrador")
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            /*
            El tipo de usuario, no lo define el nuevo usuario al registrarse, se asigna automaticamente 
            con el rol user lo cual se esta declando desde la entidad por medio del constructor (Buenas practicas)
            ya que solo puede haber un usuario con el rol administrador (ROLE_ADMIN).
            
            */
            //comentamos esta línea ya que ahora la controla el constructor en la entity
            //$user->setRoles(['ROLE_USER']);
            //Encriptado de contraseña
            $user->setPassword($passwordEncoder->encodePassword($user, $form['password']->getData()));
            //Guardar los datos
            $entityManager->persist($user);
            $entityManager->flush();
            //Mensaje de guardado con exito se muestra en el index de usuario se empleo una constante declarada en la entity
            $this->addFlash('realizado', User::REGISTRO_EXITOSO);

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN",message="La acción debe ser realizada por el administrador")
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //Encriptado de contraseña
            $user->setPassword($passwordEncoder->encodePassword($user, $form['password']->getData()));
            //Guardar los datos
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN",message="La acción debe ser realizada por el administrador")
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }
}
