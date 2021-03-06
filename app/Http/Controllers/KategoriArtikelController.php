<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
        //eloquent => ORM (Object Relational Mapping)
        $listKategoriArtikel=KategoriArtikel::all(); 
        
        //blade
        return view('kategori_artikel.index', compact ('listKategoriArtikel'));

    }

        public function show ($id){
       //$kategoriArtikel=KategoriArtikel::where('id,$id')->first();
        $kategoriArtikel=KategoriArtikel::find($id);

        return view('kategori_artikel.show', compact ('kategoriArtikel'));

        }
}
