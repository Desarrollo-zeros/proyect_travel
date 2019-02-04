<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $departamento = [
            5=>'ANTIOQUIA',
            8=>'ATLÁNTICO',
            11=>'BOGOTÁ, D.C.',
            13=>'BOLÍVAR',
            15=>'BOYACÁ',
            17=>'CALDAS',
            18=>'CAQUETÁ',
            19=>'CAUCA',
            20=>'CESAR',
            23=>'CÓRDOBA',
            25=>'CUNDINAMARCA',
            27=>'CHOCÓ',
            41=>'HUILA',
            44=>'LA GUAJIRA',
            47=>'MAGDALENA',
            50=>'META',
            52=>'NARIÑO',
            54=>'NORTE DE SANTANDER',
            63=>'QUINDIO',
            66=>'RISARALDA',
            68=>'SANTANDER',
            70=>'SUCRE',
            73=>'TOLIMA',
            76=>'VALLE DEL CAUCA',
            81=>'ARAUCA',
            85=>'CASANARE',
            86=>'PUTUMAYO',
            88=>'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA',
            91=>'AMAZONAS',
            94=>'GUAINÍA',
            95=>'GUAVIARE',
            97=>'VAUPÉS',
            99=>'VICHADA'];

        foreach ($departamento as $key => $value){
            DB::table("departamentos")->insert(["id"=>$key,"departamento"=>$value]);
        }

        DB::table("municipios")->insert(["id"=>"1042","municipio"=>"Valledupar","estado"=>"1","idDepartamento"=>20]);
        DB::table("municipios")->insert(["id"=>"107","municipio"=>"Bogotá","estado"=>"1","idDepartamento"=>11]);
        DB::table("municipios")->insert(["id"=>"88","municipio"=>"Barranquilla","estado"=>"1","idDepartamento"=>8]);
        DB::table("municipios")->insert(["id"=>"118","municipio"=>"Bucaramanga","estado"=>"1","idDepartamento"=>68]);
        DB::table("municipios")->insert(["id"=>"275","municipio"=>"Cúcuta","estado"=>"1","idDepartamento"=>54]);
        DB::table("municipios")->insert(["id"=>"877","municipio"=>"Santa Marta","estado"=>"1","idDepartamento"=>47]);
        DB::table("municipios")->insert(["id"=>"114","municipio"=>"Bosconia","estado"=>"1","idDepartamento"=>20]);
        DB::table("municipios")->insert(["id"=>"547","municipio"=>"Medellín","estado"=>"1","idDepartamento"=>5]);
        DB::table("usuarios")->insert([
            "id"=>1,
            "username" => "zeros",
            "password" => sha1("toor"),
            "email" => "wowzeros2@gmail.com",
            "rol" => 3
        ]);

        DB::table("usuarios")->insert([
            "id"=>2,
            "username" => "test",
            "password" => sha1("toor"),
            "email" => "test@gmail.com",
            "rol" => 1
        ]);


        DB::table("buses")->insert([
            "id" => 1,
            "placa" => "ABC-123",
            "marca" => "mazda",
            "modelo" => "1990",
            "asientos" => 34,
        ]);

        DB::table("conductores")->insert([
            "id" => 1,
            "cedula" => "1234567891",
            "nombre" => "test A",
            "telefono" => "1234567891"
        ]);

        DB::table("busConductor")->insert([
            "id" => 1,
            "conductor" => 1,
            "salida" =>1042,
            "destino" => 88,
            "fsalida" => "04/11/2019",
            "horaSalida" => "8:00 AM",
            "bus" => 1,
            "precio" => 100.0
        ]);
    }
}
