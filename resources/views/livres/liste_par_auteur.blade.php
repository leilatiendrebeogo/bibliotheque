@extends('layouts.menu')
@section( 'contenu')


<div class="contain">
    <h2>liste des livres auteurs <br></h2>
    <ul class="responsive-table">
      <li class="table-header">
        <div class="col col-3"><h5>auteur</h5></div>
        <div class="col col-3"><h5>nombre de  livres</h5></div>

      </li>
      @foreach ($liste_livre as $liste_livre)
      <li class="table-row">
        <div class="col col-3" data-label="Job Id"><p>{{$liste_livre->auteur}}</p></div>
        <div class="col col-3" data-label="Customer Name"><p>{{$liste_livre->titre}}</p></div>
        
        
      </li>
      <li><a href=""></a></li>
      @endforeach
      
      
    </ul>
  </div>
@endsection
