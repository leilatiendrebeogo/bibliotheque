<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutocompletController extends Controller
{
    public function index(){
        return view('autocomplet');
    }
    public function fetch(Request $request){
     if($request ->get('query')){
         $query = $request->get('query');
         $data = DB ::table ('inscrits')
            ->where ('nom','LIKE',"%{$query}%")
            ->get();
            $output = '<ul class="">';
            foreach ($data as $row){
            $output .= '<li><a href="">'.$row->nom.'</a></li>';
            }
            $output .='</ul>';
            echo $output ;
        }
    }
    
}
