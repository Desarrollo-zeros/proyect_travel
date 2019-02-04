<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Municipios extends Model
{
    protected $table = "municipios";
    protected $primaryKey = "id";
    protected $fillable = ["municipio","estado","idDepartamento"];
    private $db = null;

    public function __construct()
    {
        parent::__construct();

        $this->db = DB::table($this->table);
    }

        public function getMunicipios(){
        return $this->db->get();
    }

}
