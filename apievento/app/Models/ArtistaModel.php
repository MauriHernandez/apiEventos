<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class ArtistaModel extends Model
{
    protected $collection;

    public function __construct(){
        parent::__construct();
        $this->collection=(new MongoDBClient('mongodb+srv://mcarlosmauricio53:contraseniachida@cluster0.rnwqsop.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0'))->test->artistas;
    }

     //regresa todos los registros
    public function index(){
        $artistas=$this->collection->find();
        return $artistas->toArray();
    }
      //registra los registros que tengan el nombre proporcionada
    public function getByNombre($nombre){
        $artistas=$this->collection->find([
            '$or'=>[
            ['nombre.nombre' => $nombre],
            ['nombre.apellidoPaterno' => $nombre],
            ['nombre.apellidoMaterno' => $nombre]
            ]
        ]);
        return $artistas->toArray();
    }

    public function getByGenero($genero){
        $artistas=$this->collection->find([
            '$or'=>[
            ['genero' => $genero]
            ]
        ]);
        return $artistas->toArray();
    }
    public function getBySitio($sitio_web){
        $artistas=$this->collection->find([
            '$or'=>[
            ['sitio_web' => $sitio_web]
            ]
        ]);
        return $artistas->toArray();
    }
    public function getByDescripcion($descripcion){
        $artistas=$this->collection->find([
            '$or'=>[
            ['descripcion' => $descripcion]
            ]
        ]);
        return $artistas->toArray();
    }
    public function getByNombreAndGenero($nombre, $genero){
        $artistas=$this->collection->find([
            '$and'=>[
                ['$or'=>[
                    ['nombre.nombre' => $nombre],
                    ['nombre.apellidoPaterno' => $nombre],
                    ['nombre.apellidoMaterno' => $nombre]
                ]],
                ['genero' => $genero]
            ]
        ]);
        return $artistas->toArray();
    }
    
}
