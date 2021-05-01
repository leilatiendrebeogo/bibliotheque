@extends('layouts.menu')
 @section('contenu')
 <div class="row justify-content-center">
  <div class="col-md-6 ">
      <div class="card">
          <div class="card-header"><h3>Enregistre livre</h3></div>

          <div class="card-body">
              <form method="POST" action="{{ route('enregistrer.livre') }}">
                  @csrf

                  <div class="form-group row">
                      <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('titre') }}</label>

                      <div class="col-md-6">
                          <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{ old('titre') }}" required autocomplete="titre" autofocus>

                          @error('titre')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="auteur" class="col-md-4 col-form-label text-md-right">{{ __('auteur') }}</label>

                      <div class="col-md-6">
                          <input id="auteur" type="text" class="form-control @error('auteur') is-invalid @enderror" name="auteur" value="{{ old('auteur') }}" required autocomplete="email" autofocus>

                          @error('auteur')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="genre" class="col-md-4 col-form-label text-md-right">{{ __('genre') }}</label>
                      <div class="col-md-6">
                       <div class="form-group">
                        <select name="genre" class="form-control" id="exampleFormControlSelect1">
                               @foreach ($genres as $genres)
                               <option  value="{{$genres->nom}}">{{$genres->nom}}</option>
                                   
                               @endforeach  
                        </select>
                      </div>
                      </div>
                    </div>
                    
                
                  <div class="form-group row">
                    <label for="edition" class="col-md-4 col-form-label text-md-right">{{ __('edition') }}</label>

                    <div class="col-md-6">
                        <input id="edition" type="text" class="form-control @error('edition') is-invalid @enderror" name="edition" value="{{ old('edition') }}" required autocomplete="edition" autofocus>

                        @error('edition')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                  <label for="pays" class="col-md-4 col-form-label text-md-right">{{ __('pays') }}</label>

                  <div class="col-md-6">
                      <input id="pays" type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" value="{{ old('pays') }}" required autocomplete="pays" autofocus>
                       
                      @error('pays')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                <label for="datesortie" class="col-md-4 col-form-label text-md-right">{{ __('datesortie') }}</label>

                <div class="col-md-6">
                    <input id="datesortie" type="date" class="form-control @error('datesortie') is-invalid @enderror" name="datesortie" value="{{ old('datesortie') }}" required autocomplete="datesortie" autofocus>

                    @error('datesortie')
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
    