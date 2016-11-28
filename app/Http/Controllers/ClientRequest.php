<?php

/**
 * Description of Request
 *
 * @author Jaime Munizaga L. <jaime.munizaga.l@gmail.com>
 */

namespace App\Http\Controllers;

//use App\Http\Controllers\Conector;
use Illuminate\Support\Facades\DB;

class ClientRequest {

    private $data;
    private $id;
    private $fecha;
    private $estado;
    //private $conector;
    public static $NO_EJECUTADO = 0;
    public static $EJECUTADO = 1;

    public function store($data) {
        $this->insert($data);
    }

    public function getData() {
        return $this->data;
    }

    public function getId() {
        return $this->id;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getRequestData($id) {
        $request = $this->select($id);
        $this->id = $id;
        $this->data = $request->data;
        $this->timestamp = $request->fecha;
        $this->estado = $request->estado;
    }

    public function setEjecutado() {
        $this->update($this->id, ClientRequest::$EJECUTADO);
    }

    private function select($id) {
        $results = DB::select('select * from request_cliente where id = :id', ['id' => $id]);
        return $results;
    }

    private function insert($data) {
        DB::insert('insert into request_cliente (data) values (:data)', ['data' => $data]);
    }

    private function update($id, $estado) {
        DB::update('update request_cliente set estado = :estado where id = :id', ['id' => $id, 'estado' => $estado]);
    }

}
