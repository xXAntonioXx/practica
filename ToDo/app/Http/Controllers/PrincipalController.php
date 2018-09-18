<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendiente;

class PrincipalController extends Controller
{

	//public $contenido=Pendiente::all();

    public function Cargar(){

        //cuando uses blade usa la conexion que esta aqui abajo comentada
    	//$contenido=Pendiente::all();

    	//return view('main',['lista'=>$contenido,]);
        return view('welcome');
    }

    public function Crear(Request $req){

    	$this->validate($req,[
    		'tareaInput'=>'required'
    	]);

    	$pendiente = Pendiente::create([
    		'pendiente'=>$req['tareaInput']
    	]);

    	//return redirect('/');

    	//primero vamos a intentar hacer la validacion de datos
    	//el pendiente no debe ser mas largo que 150 chars.
    	
    	
    }

    public function Borrar($ID){

    	Pendiente::where('id',$ID)->delete();

        //cuando estes usando blade descomenta el ruturn de abajo para usar este metodo y que redireccione a la pagina principal
    	//return redirect('/');
    }

    public function respuesta(){
        $contenido=Pendiente::all();

        return $contenido;
    }
}
