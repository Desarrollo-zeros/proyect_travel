<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Conductores extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ["cedula", "nombre", "telefono"];
    protected $table = "conductores";
    public $timestamps = false;

    private $db = null;

    public function __construct()
    {
        parent::__construct();

        $this->db = DB::table($this->table);
    }

    public function register($data){
        return $this->fill($data)->save();
    }

    public function getConductores(){
        return $this->db->where("estado","=","1")->get();
    }

    public function eliminar($id){
        $this->db->where("id","=",$id)->update(["estado"=>0]);
        return $this->getConductores();
    }

}
