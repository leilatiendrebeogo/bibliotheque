<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Genre;
use App\Livre;
use App\Emprunt;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\App;

class LivreController extends Controller
{
   
    public function livre_form (){
        $genres = Genre::all();
            
        return view('livres/form', compact('genres'));
        
        
    }
    public function enregistrer_livre(Request $request){
         $genre_id = Genre::select('id')->where('nom',$request->input('genre'))->get();
        $this->validate($request, [
            'titre' => 'required|min:5',
            'auteur' => 'required|min:5',
            'edition' => 'required|min:5',
            'pays' => 'required|min:5',
        ]);

        $livre = new \App\Livre;
        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur;
        $livre->edition = $request->edition;
        $livre->pays = $request->pays;
        $livre->genre_id = $genre_id[0]->id;
        $livre->datesortie = $request->datesortie;
        $livre->save();

        $genres = Genre::all();
        return view('livres/form',compact('genres'));
    }
    public function liste_livre (){

        $liste_livre = Livre::orderBY('auteur')->orderBY('datesortie','asc')->get();
            
        return view('livres/liste_livre', compact('liste_livre'));
    
    }
    public function liste_par_auteur (){

        $liste_livre = Livre::groupBy('auteur')
        ->select('auteur')
        ->selectRaw('count(*)as titre')
        ->get()  ;
        
        return view('livres/liste_par_auteur' ,compact('liste_livre'));

    }
    public function emprunt_form(){

      return view('livres/emprunt');

    }
    public function liste_en_accordeon(){


        return view('livres/liste_par_auteur_2');
    }
    public function enregistrer_emprunt(Request $request){
       /* date(‘d-m-Y’, strtotime(‘+2 month’));
        $emprunt = new Emprunt;
        $emprunt->date_emprunt = $request ->$date_actuel;
        $emprunt->date_emprunt = $request ->$date_actuel;
        $emprunt->date_emprunt = $request ->$date_actuel;
        $emprunt->date_emprunt = $request ->$date_actuel;
        $emprunt->date_emprunt = $request ->$date_actuel;
        $emprunt->date_emprunt = $request ->$date_actuel;
        $emprunt->save();
         */
        





    }
    
    
}  
