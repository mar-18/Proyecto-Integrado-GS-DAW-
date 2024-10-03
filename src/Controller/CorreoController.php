<?php

namespace App\Controller;

use App\Entity\Salon;
use Dompdf\Dompdf;
use Dompdf\Options;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Crypto\SMimeSigner;
use Symfony\Component\Mime\Email;

class CorreoController extends AbstractController
{

    /**
     * imprimir
     * @Route("/imprimir", name="imprimir"))
     *
     * @param SessionInterface $session
     */
    public function imprimir(Request $request, SessionInterface $session)
    {
        // Configuracion Dompdf para el estilo que deseamos
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setPdfBackend('GD');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        //Datos prespuesto
        $total = $_POST['total'];
        $nombreReferencia = $_POST['nombreReferencia'];
        $telReferencia = $_POST['telReferencia'];
        $fecha = $_POST['fecha'];
        $salon = $_POST['nombreSalon'];
        $menu = $_POST['menuElegido'];
        $numPersonas = $_POST['nPersonas'];
        $precioMenu = $_POST['precioMenu'];

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView("presupuesto/presupuesto.html.twig", [
            'nombreReferencia' => $nombreReferencia,
            'telReferencia' => $telReferencia,
            'fecha' => $fecha,
            'nombreSalon' => $salon,
            'menuElegido' => $menu,
            'nPersonas' => $numPersonas,
            'total' => $total,
            'precioMenu' => $precioMenu,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }
    /**
     * Enviar correo
     * @Route("/sendemail",name="sendemail"))
     */
    public function sendEmail(Request $request, SessionInterface $session, MailerInterface $mailer)
    {
        //Datos para presupuesto
        $total = $_POST['total'];
        $correo = $_POST['correo'];
        $nombreReferencia = $_POST['nombreReferencia'];
        $telReferencia = $_POST['telReferencia'];
        $fecha = $_POST['fecha'];
        $salon = $_POST['nombreSalon'];
        $menu = $_POST['menuElegido'];
        $precioMenu = $_POST['precioMenu'];
        $numPersonas = $_POST['nPersonas'];

        $email = (new TemplatedEmail())
            ->from('noemi.sajche@gmail.com')
            ->to(new Address($correo))
            ->subject('Presupuesto-SALO')
            ->embedFromPath('img/logo1.png', 'logo')
            // renderizacion a la plantilla de diseño del correo
            ->htmlTemplate('presupuesto/presupuesto.html.twig')
            ->context([
                'nombreReferencia' => $nombreReferencia,
                'telReferencia' => $telReferencia,
                'fecha' => $fecha,
                'nombreSalon' => $salon,
                'menuElegido' => $menu,
                'precioMenu' => $precioMenu,
                'nPersonas' => $numPersonas,
                'total' => $total
            ]);

        $mailer->send($email);

        return $this->render('index/index.html.twig');
    }
}
