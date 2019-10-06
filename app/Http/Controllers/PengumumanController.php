<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengumuman;

class PengumumanController extends Controller
{
    public function index(){
        //eloquent => ORM (Object Relational Mapping)
        $listPengumuman=Pengumuman::all(); 
        
        //blade
        return view('Pengumuman.index', compact ('listPengumuman'));

    }

        public function show ($id){
       //$Pengumuman=Pengumuman::where('id,$id')->first();
        $Pengumuman=Pengumuman::find($id);

        return view('Pengumuman.show', compact ('Pengumuman'));

        }
}
