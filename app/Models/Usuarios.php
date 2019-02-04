<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usuarios extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ["username", "password", "email", "rol"];
    protected $table = "usuarios";
    public $timestamps = false;

    private $db = null;

    public function __construct()
    {
        parent::__construct();

        $this->db = DB::table($this->table);
    }

    /**
     * @param $username
     * @param $password
     * @return mixed
     */
    public function login($username, $password)
    {
        $data = $this->db->where(compact("username"))->where(compact("password"))->get();

        if ($data->count() > 0) {
            session()->put("users", $data->all());
            return ["status" => true, "success" => "Usuario existe", "error" => ""];
        } else {
            return ["status" => false, "success" => "", "error" => "Usuario o Contraseña incorrecto"];
        }
    }

    public function register($data){
        return $this->fill($data)->save();
    }

    public function getUsuario(){
        return $this->db->get();
    }

}

