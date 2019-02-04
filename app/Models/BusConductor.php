<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BusConductor extends Model
{
    protected $table = "busConductor";
    protected $primaryKey = "id";
    private $db = null;
    public $timestamps = true;

    public function __construct()
    {
        parent::__construct();

        $this->db = DB::table($this->table);
    }

    public function getBc($bc = []){
        //select *from busConductor bc where fsalid = $fsalid and fretorno = $fretorno and salidad = $salida and destino = $destin
        $query = "SELECT ms.municipio as msM, md.municipio as mdM,fsalida,horaSalida,precio, bc.id FROM busConductor bc INNER JOIN municipios ms on bc.salida = ms.id INNER JOIN municipios md on bc.destino = md.id WHERE destino = '{$bc["destino"]}' and fsalida = '{$bc["fsalida"]}'  and salida = '{$bc["salida"]}'";
        return DB::select($query);
    }


    public function getAll($id = ""){
        if(empty($id)){
            $query = "SELECT c.nombre as namec, ms.municipio as msM, md.municipio as mdM,fsalida,horaSalida,precio, bc.id, placa FROM busConductor bc INNER JOIN municipios ms on bc.salida = ms.id INNER JOIN municipios md on bc.destino = md.id INNER JOIN buses b on bc.bus = b.id INNER JOIN conductores c on bc.conductor = c.id where bc.estado = 1 ";

        }else{
            $query = "SELECT c.nombre as namec, ms.municipio as msM, md.municipio as mdM,fsalida,horaSalida,precio, bc.id, placa FROM busConductor bc INNER JOIN municipios ms on bc.salida = ms.id INNER JOIN municipios md on bc.destino = md.id INNER JOIN buses b on bc.bus = b.id INNER JOIN conductores c on bc.conductor = c.id where bc.estado = 1 and bc.id = {$id}";
        }
        return DB::select($query);
    }


    public function eliminar($id){
        $this->db->where("id","=",$id)->update(["estado"=>0]);
        return $this->getAll();
    }

    public function register($data){
        return $this->db->insert($data);
    }

    public function registerTicket($data){
         DB::table("tiquete")->insert($data);
         return $this->historialTicket(session()->get("users")[0]->id);
    }

    public function historialTicket($idUsuario){
        $query = "SELECT c.nombre as namec, ms.municipio as msM, md.municipio as mdM,fsalida,horaSalida,precio, bc.id, placa, fechaCompra FROM busConductor bc INNER JOIN municipios ms on bc.salida = ms.id INNER JOIN municipios md on bc.destino = md.id INNER JOIN buses b on bc.bus = b.id INNER JOIN conductores c on bc.conductor = c.id INNER JOIN tiquete t on bc.id = t.idbc where bc.estado = 1 and t.idUsuario = {$idUsuario}";
        return DB::select($query);
    }
}
