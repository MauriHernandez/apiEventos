<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class EventoModel extends Model
{
    protected $collection;

    public function __construct(){
        parent::__construct();
        $this->collection=(new MongoDBClient('mongodb+srv://mcarlosmauricio53:contraseniachida@cluster0.rnwqsop.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0'))->test->eventos;
    }

     //regresa todos los registros
    public function index(){
        $eventos=$this->collection->find();
        return $eventos->toArray();
    }
    public function getByNombre($nombre){
        $eventos=$this->collection->find([
            '$or'=>[
            ['nombre' => $nombre]
            ]
        ]);
        return $eventos->toArray();
    }
    public function getByDescripcion($descripcion){
        $eventos=$this->collection->find([
            '$or'=>[
            ['descripcion' => $descripcion]
            ]
        ]);
        return $eventos->toArray();
    }

    public function getByTipo($tipo){
        $eventos=$this->collection->find([
            '$or'=>[
            ['tipoEvento' => $tipo]
            ]
        ]);
        return $eventos->toArray();
    }

    public function getByEstado($estado){
        $eventos=$this->collection->find([
            '$or'=>[
            ['estadoEvento' => $estado]
            ]
        ]);
        return $eventos->toArray();
    }
    public function getByFechaHora($fechaHora){
        $eventos=$this->collection->find([
            '$or'=>[
            ['fechaHora' => $fechaHora]
            ]
        ]);
        return $eventos->toArray();
    }
    public function getByOrganizador($nombreOrganizador)
    {
        $organizadoresCollection = (new MongoDBClient('mongodb+srv://mcarlosmauricio53:contraseniachida@cluster0.rnwqsop.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0'))->test->organizadors;
    
        $organizadores = $organizadoresCollection->find([
            '$or' => [
                ['nombre.nombre' => $nombreOrganizador],
                ['nombre.apellidoPaterno' => $nombreOrganizador],
                ['nombre.apellidoMaterno' => $nombreOrganizador]
            ]
        ]);
    
        $idsOrganizadores = [];
    
        foreach ($organizadores as $organizador) {
            $idsOrganizadores[] = $organizador['_id'];
        }
    
        $eventos = $this->collection->find(['organizador' => ['$in' => $idsOrganizadores]]);
    
        return $eventos->toArray();
    }
    public function getByArtistaAndUbicacion($nombreArtista, $nombreUbicacion)
{
    $artistasCollection = (new MongoDBClient('mongodb+srv://mcarlosmauricio53:contraseniachida@cluster0.rnwqsop.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0'))->test->artistas;
    $recintosCollection = (new MongoDBClient('mongodb+srv://mcarlosmauricio53:contraseniachida@cluster0.rnwqsop.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0'))->test->recintos;

    $artistas = $artistasCollection->find([
        '$or' => [
            ['nombre.nombre' => $nombreArtista],
            ['nombre.apellidoPaterno' => $nombreArtista],
            ['nombre.apellidoMaterno' => $nombreArtista]
        ]
    ]);

    $recintos = $recintosCollection->find(['nombre' => $nombreUbicacion]);

    $idsArtistas = [];
    $idsRecintos = [];

    foreach ($artistas as $artista) {
        $idsArtistas[] = $artista['_id'];
    }

    foreach ($recintos as $recinto) {
        $idsRecintos[] = $recinto['_id'];
    }

    $eventos = $this->collection->find([
        'artistas' => ['$in' => $idsArtistas],
        'ubicacion' => ['$in' => $idsRecintos]
    ]);

    return $eventos->toArray();
}

public function getByArtista($nombreArtista)
{
    $artistasCollection = (new MongoDBClient('mongodb+srv://mcarlosmauricio53:contraseniachida@cluster0.rnwqsop.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0'))->test->artistas;

    $artistas = $artistasCollection->find([
        '$or' => [
            ['nombre.nombre' => $nombreArtista],
            ['nombre.apellidoPaterno' => $nombreArtista],
            ['nombre.apellidoMaterno' => $nombreArtista]
        ]
    ]);

    $idsArtistas = [];

    foreach ($artistas as $artista) {
        $idsArtistas[] = $artista['_id'];
    }

    $eventos = $this->collection->find(['artistas' => ['$in' => $idsArtistas]]);

    return $eventos->toArray();
}

public function getByUbicacion($nombreUbicacion)
{
    $recintosCollection = (new MongoDBClient('mongodb+srv://mcarlosmauricio53:contraseniachida@cluster0.rnwqsop.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0'))->test->recintos;

    $recintos = $recintosCollection->find(['nombre' => $nombreUbicacion]);

    $idsRecintos = [];

    foreach ($recintos as $recinto) {
        $idsRecintos[] = $recinto['_id'];
    }

    $eventos = $this->collection->find(['ubicacion' => ['$in' => $idsRecintos]]);

    return $eventos->toArray();
}

}
