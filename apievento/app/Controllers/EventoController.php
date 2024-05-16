<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\EventoModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class EventoController extends BaseController
{
    
    public function index()
    {
        $eventos = new EventoModel();
        $allEventos = $eventos->index();

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allEventos);
        return $response;
    }
    public function documentacionIndex()
    {
        return view('eventos/index');
    }

    public function getByNombre($nombre)
    {
        $eventos = new EventoModel();
        $allEventos = $eventos->getByNombre($nombre);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allEventos);
        return $response;
    }
    public function getByDescripcion($descripcion)
    {
        $eventos = new EventoModel();
        $allEventos = $eventos->getByDescripcion($descripcion);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allEventos);
        return $response;
    }
    public function getByTipo($tipo)
    {
        $eventos = new EventoModel();
        $allEventos = $eventos->getByTipo($tipo);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allEventos);
        return $response;
    }
    public function getByEstado($estado)
    {
        $eventos = new EventoModel();
        $allEventos = $eventos->getByEstado($estado);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allEventos);
        return $response;
    }
    public function getByFechaHora($fecha)
    {
        $eventos = new EventoModel();
        $allEventos = $eventos->getByFechaHora($fecha);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allEventos);
        return $response;
    }

    public function getByOrganizador($nombreOrganizador)
    {
        $eventos = new EventoModel();
        $allEventos = $eventos->getByOrganizador($nombreOrganizador);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allEventos);
        return $response;
    }

    public function getByArtistaAndUbicacion($nombreArtista, $nombreUbicacion)
    {
        $eventos = new EventoModel();
        $allEventos = $eventos->getByArtistaAndUbicacion($nombreArtista, $nombreUbicacion);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allEventos);
        return $response;
    }

    public function getByArtista($nombreArtista)
    {
        $eventos = new EventoModel();
        $allEventos = $eventos->getByArtista($nombreArtista);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allEventos);
        return $response;
    }

    public function getByUbicacion($nombreUbicacion)
    {
        $eventos = new EventoModel();
        $allEventos = $eventos->getByUbicacion($nombreUbicacion);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allEventos);
        return $response;
    }

}

