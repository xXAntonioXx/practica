<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function validar(Request $req){
        session_start();
        if($req['username']=='antonio' && $req['pass']=='contra'){
            $_SESSION['nombre']=$req['username'];
            return redirect('/main');
        }
        return redirect('/');
    }
}
