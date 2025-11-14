<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use Psr\Log\LoggerInterface;

/**
 * Clase BaseController
 *
 * BaseController ofrece un lugar conveniente para cargar componentes
 * y ejecutar funciones necesarias en todos los controladores.
 * Extiende esta clase en cualquier nuevo controlador:
 *     class Home extends BaseController
 *
 * Por seguridad declara cualquier metodo nuevo como protected o private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instancia del objeto Request principal.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * Arreglo de helpers que se cargan automaticamente al instanciar la clase.
     * Estos helpers quedan disponibles para cualquier controlador que extienda BaseController.
     *
     * @var list<string>
     */
    // Cargamos helper url para disponer de funciones base_url en todas las vistas
    protected $helpers = ['url'];

    /**
     * Instancia de sesion compartida para los controladores descendientes.
     */
    // Referencia unica de sesion para reutilizar en controladores hijos
    protected $session;

    /**
     * Declara propiedades para cualquier miembro que inicialices.
     * La creacion de propiedades dinamicas esta deprecada en PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // No modificar: mantiene configuracion base de CodeIgniter
        parent::initController($request, $response, $logger);

        // Creamos la sesion una sola vez para compartirla en toda la aplicacion
        $this->session = Services::session();
    }
}
