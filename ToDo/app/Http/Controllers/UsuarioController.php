<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    function validar(Request $req){
        /*==================================================================
            inicio de sesion 
        ==================================================================*/
        //comparamos el input de formulario con sus credenciales e inicia la sesion y redirecciona a la pagina principal
        if($req['username']=='antonio' && $req['pass']=='contra'){
            session_start();
            $_SESSION['nombre']=$req['username'];
            return redirect('/main');

        }
        //en caso de que las credenciales sean incorrectas redirecciona al login
        return redirect('/');
    }
    
    function CerrarSess(){
        /*==================================================================
            cierre de sesion y redireccion al login
        ==================================================================*/
        session_start();
        session_destroy();
        return redirect('/');

    }
}
