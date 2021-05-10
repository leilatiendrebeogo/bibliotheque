<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/1', function () {
    return view('welcome');
});
Route::get('/', 'AccueilController@index')->name('accueil');
Route::post('/user_store', 'UserController@user_store')->name('user.store');

Route::get('/livre', 'LivreController@livre_form')->name('livre.form');
Route::post('/livre', 'LivreController@enregistrer_livre')->name('enregistrer.livre');
Route::get('/liste_livre', 'LivreController@liste_livre')->name('liste.livre');
Route::get('/liste_auteur', 'LivreController@liste_par_auteur')->name('liste.livre.auteur');

Route::get('/liste_accordeon', 'LivreController@liste_en_accordeon')->name('accordeon');



Route::get('/emprunnt_form','LivreController@emprunt_form')->name('emprunt.form');
Route::post('/enregistrer_emprunt','LivreController@enregistrer_emprunt')->name('enregistrer.emprunt');

Route::get('/genre','GenreController@genre_form')->name('genre.form');
Route::post('/genre','GenreController@enregistrer_genre')->name('enregistrer.genre');

Route::get('/inscrit_form','InscritController@inscrit_form')->name('inscrit.form');
Route::post('/inscrit','InscritController@enregistrer_inscrit')->name('enregistrer.inscrit');
Route::get('/inscrit','InscritController@liste_inscrit')->name('liste.inscrit');

Route::get('/autocomplete','AutocompletController@index');
Route::post('/autocomplete/fetch','AutocompletController@fetch')->name('autocomplete.fetch');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');