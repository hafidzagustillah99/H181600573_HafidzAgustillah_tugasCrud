<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    public function index(){
        //eloquent => ORM (Object Relational Mapping)
        $listArtikel=Artikel::all(); 
        
        //blade
        return view('artikel.index', compact ('listArtikel'));

    }

        public function show ($id){
       //$Artikel=Artikel::where('id,$id')->first();
        $Artikel=Artikel::find($id);

        return view('artikel.show', compact ('Artikel'));

        }
}
