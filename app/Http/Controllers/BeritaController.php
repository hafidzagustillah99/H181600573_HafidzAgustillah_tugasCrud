<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;

class BeritaController extends Controller
{
    public function index(){
        //eloquent => ORM (Object Relational Mapping)
        $listBerita=Berita::all(); 
        
        //blade
        return view('Berita.index', compact ('listBerita'));

    }

        public function show ($id){
       //$Berita=Berita::where('id,$id')->first();
        $Berita=Berita::find($id);

        return view('Berita.show', compact ('Berita'));

        }
}
