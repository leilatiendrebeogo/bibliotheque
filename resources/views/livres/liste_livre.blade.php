@extends('layouts.menu')
@section('contenu')
<div class="contain">
    <h2>liste des livres <br></h2>
    <ul class="responsive-table">
      <li class="table-header">
        <div class="col col-3"><h5>titre</h5></div>
        <div class="col col-3"><h5>auteur</h5></div>
        <div class="col col-2"><h5>edition</h5></div>
        <div class="col col-2"><h5>datesortie</h5></div>
        <div class="col col-4"><h5>pays</h5></div>
      </li>
      @foreach ($liste_livre as $liste_livre)
      <li class="table-row">
        <div class="col col-3" data-label="Job Id"><p>{{$liste_livre->titre}}</p></div>
        <div class="col col-3" data-label="Customer Name"><p>{{$liste_livre->auteur}}</p></div>
        <div class="col col-2" data-label="Amount"><p>{{$liste_livre->edition}}</p></div>
        <div class="col col-2" data-label="Amount"><p>{{$liste_livre->datesortie}}</p></div>
        <div class="col col-4" data-label="Payment Status"><p>{{$liste_livre->pays}}</p></div>
      </li>
      <li><a href=""></a></li>
      @endforeach
      
      
    </ul>
  </div>
    
@endsection