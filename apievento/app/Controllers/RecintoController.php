<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\RecintoModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class RecintoController extends BaseController
{
    //todos los registros
    public function index()
    {
        $recintos = new RecintoModel();
        $allRecintos = $recintos->index();

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allRecintos);
        return $response;
    }

    public function documentacionIndex()
    {
        return view('recintos/index');
    }
    //registro por nombre
    public function getByNombre($nombre)
    {
        $recintos = new RecintoModel();
        $allRecintos = $recintos->getByNombre($nombre);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allRecintos);
        return $response;
    }

    //registro por alguna direccion
    public function getByDireccion($direccion)
    {
        $recintos = new RecintoModel();
        $allRecintos = $recintos->getByDireccion($direccion);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allRecintos);
        return $response;
    }
}
