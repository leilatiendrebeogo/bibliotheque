@extends('layouts.menu')
 @section('contenu')


 <div class="row justify-content-center">
    <div class="col-md-6 ">
        <div class="card">
            <div class="card-header"><h3>Enregistre un  emprunt </h3></div>
  
            <div class="card-body">
                <form method="POST" action="{{ route('enregistrer.emprunt') }}">
                    @csrf
  
                    <div class="form-group row">
                        <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('titre') }}</label>
  
                        <div class="col-md-6">
                            <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="titre" autofocus>
  
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
  
                    <div class="form-group row">
                        <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('prenom') }}</label>
  
                        <div class="col-md-6">
                            <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="nom" autofocus>
  
                            @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                  
  
                    <div class="form-group row">
                      <label for="" class="col-md-4 col-form-label text-md-right">{{ __('nom') }}</label>
  
                      <div class="col-md-6">
                          <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="titre" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
  
                          @error('nom')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
  
                  
               
  
             
                    <div class="form-group row mb-0">
                        <div class="col-md-12 offset-md-4">
                            <button type="submit" class="btn btn-primary p-3">
                             validez
                            </button>
  
                            
                        </div>
                    </div>
                </form>
            </div>
        
 
 @endsection