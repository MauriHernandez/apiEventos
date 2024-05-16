<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class OrganizadoresModel extends Model
{
    protected $collection;

    public function __construct(){
        parent::__construct();
        $this->collection=(new MongoDBClient('mongodb+srv://mcarlosmauricio53:contraseniachida@cluster0.rnwqsop.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0'))->test->organizadors;
    }

     //regresa todos los registros
    public function index(){
        $organizadors=$this->collection->find();
        return $organizadors->toArray();
    }

     //registra los registros que tengan el nombre proporcionada
    public function getByNombre($nombre){
        $organizadors=$this->collection->find([
            '$or'=>[
            ['nombre.nombre' => $nombre],
            ['nombre.apellidoPaterno' => $nombre],
            ['nombre.apellidoMaterno' => $nombre]
            ]
        ]);
        return $organizadors->toArray();
    }

       //registra los registros que tengan la empresa proporcionada
    public function getByEmpresa($empresa){
        $organizadors=$this->collection->find([
            '$or'=>[
            ['empresa.nombre' => $empresa],
            ['empresa.sitio' => $empresa],
            ['empresa.domicilio' => $empresa]
            ]
        ]);
        return $organizadors->toArray();
    }

    //regresa los registros que tengan el telefono proporcionado
    public function getByTelefono($telefono)
    {
        $organizadors = $this->collection->find([
            '$or' => [
                ['telefono' => $telefono]
            ]
        ]);

        return $organizadors->toArray();
    }
     //regresa los registros que tengan el email proporcionado
    public function getByEmail($email)
    {
        $organizadors = $this->collection->find([
            '$or' => [
                ['email' => $email]
            ]
        ]);
    return $organizadors->toArray();
    }
}
