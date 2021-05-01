<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscritController extends Controller
{
    public function  inscrit_form(){
        return view('inscrit'); 
    }
    public function enregistrer_inscrit(Request $request){
        $this->validate($request, [
            'nom' => '|required|min:5',
            'prenom' => '|required|min:5',
            'profession' => '|required|min:5',
            'email' => '|required|email',
            
        ]);
        $livre = new \App\Inscrit;
        $livre->nom = $request->nom;
        $livre->prenom = $request->prenom;
        $livre->profession = $request->profession;
        $livre->email = $request->email;
        $livre->save();
        return "C'est bien enregistré !";
    }
}
