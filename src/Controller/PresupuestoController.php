<?php

namespace App\Controller;

use App\Entity\Evento;
use App\Entity\Menu;
use App\Entity\Presupuesto;
use App\Entity\Salon;
use App\Form\PresupuestoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
//use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
//librerias de forms



class PresupuestoController extends AbstractController
{
    /**
     * @Route("/presupuesto/{datosRecibidos}", name="presupuesto_index", methods={"GET"})
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request, $datosRecibidos = null)
    {
        //Instancia de EntityManager
        $em = $this->getDoctrine()->getManager();
        //convertimos el array de datos recibidos en objeto
        $miarrayRespuesta = json_decode($datosRecibidos);
        //obetenemos los valores que necesitamos para la consulta
        $vFecha = $miarrayRespuesta->fechaT;
        $vSalon = $miarrayRespuesta->salonT;
        //$vNumPersonas = (int) $miarrayRespuesta->numPersonasT;

        //probando consulta fecha y salon enviando datos
        $CFS = $em
            ->getRepository(Evento::class)
            ->buscarFecha($vFecha, $vSalon);
        //si existe el salon en esa fecha pasar datos nulos

        $salonRepositorio = $em
            ->getRepository(Salon::class)
            ->mostrarSalones();

        $miarrayRespuesta = $miarrayRespuesta;
        //probando capacidad ERROR

        $salonRepositorio = $em
            ->getRepository(Evento::class)
            ->buscarCapacidadSalon($vNumPersonas);

        //menus
        $menus = $em
            ->getRepository(Menu::class)
            ->findAll();
        //mostrando resultados en plantilla principal del presupuesto
        return $this->render('presupuesto/index.html.twig', [
            'salonRepositorio' => $salonRepositorio,
            'miArrayRespuesta' => $miarrayRespuesta,
            'csf' => $CFS,
            'vFecha' => $vFecha,
            'vSalon' => $vSalon,
            'menus' => $menus,
            'controller_name' => 'Presupuesto',
            'precioMenu' => '',
        ]);
    }
    /**
     * Funcion de prueba de ajax
     * @Route("/buscarPorFecha", options={"expose"=true}, name="buscarPorFecha")
     * @return void
     */
    public function buscarPorFecha(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $eventoRepositorio = $em
            ->getRepository(Evento::class)
            ->mostrarEventos();
        /*         $datosSalon = $em
            ->getRepository(Salon::class)
            ->findOneBy(['nombresalon' => "Valle"]); */

        $salonRepositorio = $em
            ->getRepository(Salon::class)
            ->mostrarSalones();
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            //obtengo el parametro que paso con el data en el ajax
            $fechaTwig = $request->query->get('fecha');
            $msj = "";

            $eventoRepositorio = $em->getRepository(Evento::class)->buscarFecha($fechaTwig);
            if ($eventoRepositorio) {
                $msj = "encontrado";
            } else {
                $msj = "NO encontrado";
            }
            /* return new JsonResponse(['eventoRepositorio' => $eventoRepositorio,]);
            */
            return $this->render('presupuesto/index.html.twig', [
                'eventoRepositorio' => $eventoRepositorio,
                'salonRepositorio' => $salonRepositorio,
                'controller_name' => $msj,
            ]);
        } else {
            throw new \Exception("Error dato");
        }
        return new Response('no es xmlHttpRequest.');
    }
    /**
     * 
     * 
     * @Route("/buscar", name="buscar"))
     * @param SessionInterface $session
     */
    public function buscar($datosRecibidos = null)
    {

        $em = $this->getDoctrine()->getManager();
        $salonRepositorio = $em
            ->getRepository(Salon::class)
            ->mostrarSalones();
        $presupuesto = new Presupuesto();
        $form = $this->createForm(PresupuestoType::class, $presupuesto);

        return $this->render('presupuesto/buscar.html.twig', [
            'salonRepositorio' => $salonRepositorio,
            'form' => $form->createView(),
            'controller_name' => '...',
        ]);
    }
    /**
     * @Route("/buscarR/{datosRecibidos}", name="buscarR", methods={"GET"})
     *
     * @param Request $request
     * @return void
     */
    public function buscarR(Request $request, $datosRecibidos = null)
    {
        //Instancia de EntityManager
        $em = $this->getDoctrine()->getManager();
        //convertimos el array de datos recibidos en objeto
        $miarrayRespuesta = json_decode($datosRecibidos);
        //obetenemos los valores que necesitamos para la consulta
        $vFecha = $miarrayRespuesta->fechaT;
        $vSalon = $miarrayRespuesta->salonT;
        //$vNumPersonas = (int) $miarrayRespuesta->numPersonasT;

        //Verifica si existe un evento tiene fecha y salon segun lo elegido por el usuario(twig)
        $CFS = $em
            ->getRepository(Evento::class)
            ->buscarFecha($vFecha, $vSalon);


        $salonRepositorio = $em
            ->getRepository(Salon::class)
            ->mostrarSalones();
        //si encuentra el salon con la fecha ocupada renderiza a la pag de busqueda
        if ($CFS) {
            return $this->render('presupuesto/buscar.html.twig', [
                'salonRepositorio' => $salonRepositorio,
                'controller_name' => 'Salon no disponible para esta fecha',
            ]);
        } else { //si no pasar los datos recibidos
            $miarrayRespuesta = $miarrayRespuesta;
            //menus a elegir
            $menus = $em
                ->getRepository(Menu::class)
                ->findAll();
            /*mostrando resultados en plantilla principal del presupuesto, paso los parametros de la consulta
            cuando el salon no esta ocupado en esta fecha*/
            return $this->render('presupuesto/index.html.twig', [
                'salonRepositorio' => $salonRepositorio,
                'miArrayRespuesta' => $miarrayRespuesta,
                'csf' => $CFS,
                'menus' => $menus,
                'nPersonas' => '',
                'nombreReferencia' => '',
                'telReferencia' => '',
                'menuElegido' => '',
                'total' => '',

                'vFecha' => $vFecha,
                'vSalon' => $vSalon,
                'controller_name' => 'Datos para el presupuesto',
                'camposVacios' => '',
            ]);
        }
    }
    /**
     * @Route("/datosPresupuesto/{datosRecibidos}", name="datosPresupuesto", methods={"GET"})
     *
     * @param Request $request
     * @return void
     */
    public function datosPresupuesto(Request $request, $datosRecibidos = null, $vNombreReferencia = null, $vTel = null)
    {
        //Instancia de EntityManager
        $em = $this->getDoctrine()->getManager();
        if ($datosRecibidos) {
            //convertimos el array de datos recibidos en objeto
            $miarrayRespuesta = json_decode($datosRecibidos);
            //obetenemos los valores que necesitamos para el presupuesto
            $vNombreReferencia = $miarrayRespuesta->nombreReferenciaT;
            $vTel = $miarrayRespuesta->telReferenciaT;
            $vFecha = $miarrayRespuesta->fechaT;
            $vSalon = $miarrayRespuesta->salonT;
            $vNumPersonas = (int) $miarrayRespuesta->numPersonasT;
            $vMenu = $miarrayRespuesta->menuT;
            $identificarMenu = $em->getRepository(Menu::class)->findOneBy(['nombremenu' => $vMenu]);
            $precioMenu = $identificarMenu->precio;
            //verificar si llegan datos
            $msj = "";
            if ($vNombreReferencia == "" || $vTel == "" || $vNumPersonas == "") {
                $msj = "Campos obligatorios vacios";
                $mensaje = 'Datos para el presupuesto';
                $identificarMenu = $vMenu;
                $total = 0;
            } else {
                //Obtener el precio de menu
                $total = $precioMenu * $vNumPersonas;
                $mensaje = "Presupuesto";
            }
        } else {
            $mensaje = 'Datos para el presupuesto';
        }

        //menus a elegir
        $menus = $em
            ->getRepository(Menu::class)
            ->findAll();
        /*mostrando resultados en plantilla principal del presupuesto,de los datos para el presupuesto final,
        se renderizan los parametros de consulta porque utiliza la misma plantilla*/
        return $this->render('presupuesto/index.html.twig', [
            'miArrayRespuesta' => $miarrayRespuesta,
            'menus' => $menus,
            'nPersonas' => $vNumPersonas,
            'nombreReferencia' => $vNombreReferencia,
            'telReferencia' => $vTel,
            'vFecha' => $vFecha,
            'vSalon' => $vSalon,
            'menuElegido' => $identificarMenu,
            'total' => $total,
            'precioMenu' => $precioMenu,
            'controller_name' => $mensaje,
            'camposVacios' => $msj,
        ]);
    }
    //formulario
    /**
     * @Route("/formulario", name="formulario")
     *
     * @param Request $request
     * @return void
     */
    public function formulario(Request $request)
    {
        // creates a task object and initializes some data for this example
        $task = new Presupuesto();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createForm(PresupuestoType::class, $task);


        return $this->render('presupuesto/form.html.twig', [

            'form' => $form->createView(),
        ]);
    }
}
