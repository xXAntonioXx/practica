<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    //
    function SubirArchivo(){
        return view('upload');
    }
}
