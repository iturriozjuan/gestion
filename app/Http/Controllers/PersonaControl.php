<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PersonaControl extends Controller
{
    //
      /*index
    - store
    - update
    - destroy
    - edit
    @return \illuminate\Http\Response

    protected $persona;
    public function __construct(Persona $persona){
        $this->persona=$persona;

    }
*/
    public function inicio(){
        //
        
        return view('index');
        }
}
