<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendiente;

class PrincipalController extends Controller
{

	//public $contenido=Pendiente::all();

    public function Cargar(Request $req){
        /*==================================================================
            este metodo es para la vista principal de la aplicacion
        ==================================================================*/
        //cuando uses blade usa la conexion que esta aqui abajo comentada
    	//$contenido=Pendiente::all();

    	//return view('main',['lista'=>$contenido,]);
        return view('welcome');
    }

    public function Login(){
        /*==================================================================
            este metodo es para el login de acceso
        ==================================================================*/
        return view('login');
    }

    //=================================================================================================
    //apartir de aqui empieza el crud
    //=================================================================================================

    public function Crear(Request $req){
        /*==================================================================
            creas un nuevo pendiente y lo insertas en la base de datos
        ==================================================================*/
    	$this->validate($req,[
    		'tareaInput'=>'required'
    	]);

    	$pendiente = Pendiente::create([
    		'pendiente'=>$req['tareaInput']
    	]);
    	
    }

    public function Borrar($ID){
        /*==================================================================
            elimina un pendiente en base al id
        ==================================================================*/

    	Pendiente::where('id',$ID)->delete();

        //cuando estes usando blade descomenta el ruturn de abajo para usar este metodo y que redireccione a la pagina principal
    	//return redirect('/');
    }

    public function respuesta(){
        /*==================================================================
            una consulta a la base de datos para buscar los pendientes
        ==================================================================*/
        $contenido=Pendiente::all();

        return $contenido;
    }

}
