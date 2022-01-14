<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UsuarioModel as UsuarioModel;
use App\Models\JuegoModel as JuegoModel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function insert(Request $req)
    {
    	$vnombre = $req->input('name0');
    	$vtiempo = $req->input('email0');

    	$data = array('nombre'=>$vnombre,"tiempo"=>$vtiempo);
    	DB::table('navetabla')->insert($data);

    	return $data;
    }
    function guardarUsuario(Request $req){
        $nombre = $req->input('nombre');
        $dni = $req->input('dni');
        $usuario = UsuarioModel::where("dni",$dni)->first();
        if($usuario){
            return $usuario->idUsuario;
        }
        $usuario = new UsuarioModel();
        $usuario->nombre = $nombre;
        $usuario->dni = $dni;
        $usuario->save();
        return  response()->json($usuario->idUsuario);
    }

    function guardarJuego(Request $req){

        $nombre = $req->input('idUsuario');
        $score = $req->input('score');

        $sad = UsuarioModel::where("nombre",$nombre)
            ->select('idUsuario')
            ->first();
        $sad = json_decode($sad)->idUsuario;

        $juego = new JuegoModel();

        $juego->idUsuario = (int)$sad;
        $juego->score = $score;

        $juego->save();

        return $juego->idJuego;
    }

    function cargarPuntajes(Request $req){
            $sql_users = '
                SELECT MAX(A.score) AS score, A.idUsuario, B.nombre
                FROM juego A
                JOIN usuario B ON A.idUsuario = B.idUsuario
                GROUP BY A.idUsuario, B.nombre
                ORDER BY MAX(A.score) ASC
            ';
            $users =DB::select($sql_users);
            return $users;
    }
}
