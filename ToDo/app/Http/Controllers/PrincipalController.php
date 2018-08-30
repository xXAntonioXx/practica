<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
	public $IDES=3;

	public $contenido=[

    		0=>'este es el pendiente1',
    		1=>'este es el pendiente2',
    		2=>'este es el pendiente3',

    	];


    public function Cargar(){

    	return view('main',['lista'=>$this->contenido,]);
    }

    public function Crear(Request $req){

    	$this->contenido[$this->IDES]=$req->tareaInput;
    	$this->IDES++;
    	return view('main',['lista'=>$this->contenido,]);
    }
}
