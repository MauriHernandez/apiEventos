<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\OrganizadoresModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class OrganizadoresController extends BaseController
{
    //todos los registros
    public function index()
    {
        $organizadors = new OrganizadoresModel();
        $allOrganizadors = $organizadors->index();

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allOrganizadors);
        return $response;
    }
    public function documentacionIndex()
    {
        return view('organizadores/index');
    }
     //registro por nombre
    public function getByNombre($nombre)
    {
        $organizadors = new OrganizadoresModel();
        $allOrganizadors = $organizadors->getByNombre($nombre);
        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allOrganizadors);
        return $response;
    }

    //registro por empresa
    public function getByEmpresa($empresa)
    {
        $organizadors = new OrganizadoresModel();
        $allOrganizadors = $organizadors->getByEmpresa($empresa);
        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allOrganizadors);
        return $response;
    }

    //registro por telefono
    public function getByTelefono($telefono)
    {
        $organizadors = new OrganizadoresModel();
        $allOrganizadors = $organizadors->getByTelefono($telefono);
        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allOrganizadors);
        return $response;
    }
    //registro por nombre
    public function getByEmail($email)
    {
        $organizadors = new OrganizadoresModel();
        $allOrganizadors = $organizadors->getByEmail($email);
        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allOrganizadors);
        return $response;
    }
}
