<?php

namespace App\Http\Controllers;

use App\Models\BusConductor;
use App\Models\Conductores;
use App\Models\Usuario;
use App\Models\Usuarios;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Municipios;
use App\Models\Buses;
use Validator;

class Travel extends Controller
{
    public function __construct()
    {
    }

    public function index(Municipios $municipios){
        $municipio = $municipios->getMunicipios();
        $users = "";
        if(session()->has("users")){
            $users = session()->get("users")[0];
        }
        return view("index")->with(compact("municipio"))->with(compact("users"));
    }

    public function login(Request $request, Usuarios $usuarios){
        $username = $request->post("username");
        $password = sha1($request->post("password"));
        return response()->json($usuarios->login($username,$password));
    }

    public function register(Request $request, Usuarios $usuarios){

        $data = [
            "username" => $request->post("username"),
            "password"=> sha1($request->post("password")),
            "email" => $request->post("email"),
            "rol" => 1
        ];
        $validator = Validator::make($data, [
            'username' => 'required|unique:usuarios|max:255',
            'email' => 'required|unique:usuarios|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(false);
        }

        return ($usuarios->register($data)) ? response()->json(true) : [false];


    }

    public function bus(Request $request,Municipios $municipios){

    }

    public function buscarBus(Request $request, BusConductor $busConductor){
        $data = [
            "salida" => $request->post("salida"),
            "destino" => $request->post("destino"),
            "fsalida" => $request->post("fsalida"),
        ];
       return response()->json($busConductor->getBc($data));
    }

    public function comprar(Request $request,BusConductor $busConductor){

    }


    public function panel(Request $request,BusConductor $busConductor, Municipios $municipios, Conductores $conductores, Buses $buses, $id = "  "){
        $users = "";
        if(session()->has("users")){
            $users = session()->get("users")[0];
        }
        $municipio = $municipios->getMunicipios();
        $conductor = $conductores->getConductores();
        $buse = $buses->getBus();
        $idbc = $id;
        return view("panel")->with(compact("users"))->with(compact("municipio"))->with(compact("conductor"))->with(compact("buse"))->with(compact("idbc"));
    }


    public function registerConductor(Request $request, Conductores $conductores){
        if($conductores->register($request->all())){
            return response()->json($conductores->getConductores());
        }
    }
    public function eliminarConductor(Request $request, Conductores $conductores){
        return response()->json($conductores->eliminar($request->post("id")));
    }

    public function getConductor(Request $request, Conductores $conductores){
        return response()->json($conductores->getConductores());
    }

    public function registerBus(Request $request,Buses $buses){

        $validator = Validator::make($request->all(), [
            'placa' => 'required|unique:buses|max:255',
        ]);


        if ($validator->fails()) {
            return response()->json(false);
        }

        if($buses->register($request->all())){
            return response()->json($buses->getBus());
        }
    }

    public function eliminarBus(Request $request, Buses $buses){
        return response()->json($buses->eliminar($request->post("id")));
    }

    public function getBus(Request $request, Buses $buses){
        return response()->json($buses->getBus());
    }



    public function registerBC(Request $request,Buses $buses, BusConductor $busConductor){
        if($busConductor->register($request->all())){
            return response()->json($busConductor->getAll());
        }
    }

    public function eliminarBC(Request $request, Buses $buses, BusConductor $busConductor){
        return response()->json($busConductor->eliminar($request->post("id")));
    }

    public function getBC(Request $request, BusConductor $busConductor){

        $id = $request->post("id");

        if(isset($id)){
            return response()->json($busConductor->getAll($id));
        }else{
            return response()->json($busConductor->getAll());
        }
    }

    public function comprarTicket(Request $request, BusConductor $busConductor){
        $data = [
            "idbc"=>$request->post("idbc"),
            "idUsuario" => $request->session()->get("users")[0]->id,
            "fechaCompra" => Carbon::now()
        ];
        return response()->json($busConductor->registerTicket($data));
    }


    public function historialTicket(Request $request,BusConductor $busConductor){
        return response()->json($busConductor->historialTicket($request->session()->get("users")[0]->id));
    }

    public function getUsuario(Usuarios $usuarios){
        return response()->json($usuarios->getUsuario());
    }
}
