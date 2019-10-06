<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;

class GaleriController extends Controller
{
    public function index(){
        //eloquent => ORM (Object Relational Mapping)
        $listGaleri=Galeri::all(); 
        
        //blade
        return view('Galeri.index', compact ('listGaleri'));

    }

        public function show ($id){
       //$Galeri=Galeri::where('id,$id')->first();
        $Galeri=Galeri::find($id);

        return view('Galeri.show', compact ('Galeri'));

        }
}
