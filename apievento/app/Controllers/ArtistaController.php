<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ArtistaModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class ArtistaController extends BaseController
{
      //todos los registros
    public function index()
    {
        $artistas = new ArtistaModel();
        $allArtistas = $artistas->index();

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allArtistas);
        return $response;
    }
    public function documentacionIndex()
    {
        return view('artistas/index');
    }
       //registro por nombre
    public function getByNombre($nombre)
    {
        $artistas = new ArtistaModel();
        $allArtistas = $artistas->getByNombre($nombre);
        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allArtistas);
        return $response;
    }
    public function getByGenero($genero)
    {
        $artistas = new ArtistaModel();
        $allArtistas = $artistas->getByGenero($genero);
        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allArtistas);
        return $response;
    }
    public function getBySitio($sitio_web)
    {
        $artistas = new ArtistaModel();
        $allArtistas = $artistas->getBySitio($sitio_web);
        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allArtistas);
        return $response;
    }
    public function getByDescripcion($descripcion)
    {
        $artistas = new ArtistaModel();
        $allArtistas = $artistas->getByDescripcion($descripcion);
        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allArtistas);
        return $response;
    }
    public function getByNombreAndGenero($nombre, $genero)
{
    $artistas = new ArtistaModel();
    $allArtistas = $artistas->getByNombreAndGenero($nombre, $genero);
    $response = service('response');
    $response->setStatusCode(Response::HTTP_OK);
    $response->setJSON($allArtistas);
    return $response;
}
}
