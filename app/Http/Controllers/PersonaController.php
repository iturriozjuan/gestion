<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Persona;
use resource\views;


class PersonaController extends Controller
{
    /*index
    - store
    - update
    - destroy
    - edit
    @return \illuminate\Http\Response
    */
    protected $persona;
    public function __construct(Persona $persona){
        $this->persona=$persona;

    }
    public function index1(){
        //
        return view('index');
    }


}

