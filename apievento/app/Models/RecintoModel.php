<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class RecintoModel extends Model
{
    protected $collection;

    public function __construct(){
        parent::__construct();
        $this->collection=(new MongoDBClient('mongodb+srv://mcarlosmauricio53:contraseniachida@cluster0.rnwqsop.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0'))->test->recintos;
    }

    //regresa todos los registros
    public function index(){
        $recintos=$this->collection->find();
        return $recintos->toArray();
    }

    //regresa los registros que tengan el nombre proporcionado
    public function getByNombre($nombre)
    {
        $recintos = $this->collection->find([
            '$or' => [
                ['nombre' => $nombre]
            ]
        ]);

        return $recintos->toArray();
    }

    //registra los registros que tengan la direccion proporcionada
    public function getByDireccion($direccion){
        $recintos=$this->collection->find([
            '$or'=>[
            ['direccion.calle' => $direccion],
            ['direccion.numero' => $direccion],
            ['direccion.ciudad' => $direccion],
            ['direccion.estado' => $direccion],
            ['direccion.pais' => $direccion],
            ['direccion.codigo_postal' => $direccion]
            ]
        ]);
        return $recintos->toArray();
    }

}
