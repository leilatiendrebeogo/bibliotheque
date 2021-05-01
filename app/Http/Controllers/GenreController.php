<?php

namespace App\Http\Controllers;
use App\Genre;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GenreController extends Controller
{
  public function genre_form(){
    return view('genre');
  }
  public function enregistrer_genre(Request $request){
    $this->validate($request, [
        'nom' => '|required|min:5',
        'description' => '|required|min:5'
    ]);
    $genres = new \App\Genre;
    $genres->nom = $request->nom;
    $genres->description = $request->description;
    $genres->save();
    
    return view('genre');
  }
 
 
}
