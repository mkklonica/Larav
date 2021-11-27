<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('books', 'BookController');
Route::get('/books', [BookController::class, 'index']);
Route::get('onlyjson', function (){
    //
})->middleware('isjson');

// Route::prefix('hello')->group(function () {
//     Route::get('/world', function () {
//         echo "Witaj w świecie";
//     });
//     Route::get('/{name?}/{age?}', function (String $name = "Nieznajomy", int $age = null) {
//     // ? po nazwach parametrów definiuje, że parametr jest opcjonalny 
//         echo "Siema ".$name;
//             if (is_null($age))
//                 echo ". Nie podałeś wieku";
//             else 
//                 echo ", masz ".$age." lat";
//     });
// });
// Route::redirect('/witaj', '/hello/world'); // przekierwoanie rzadania adresu 
    // })->name('yoString');

                        //przypisanie danej trasie jednoznacznej nazwy, np do przekierowań
                        //redirect()->route('yoString')
/* 
    obsługa trasy
    Route::get('/hello-word', "HelloWordController@hello");
    odwołuje się do metody hello kontrolera-klasy HelloWordController 
    ale narazie to tylko w ramach dygresji
    Najpewniej przprzez routing okreslamy trasy jakimi mają podążać użytkownicy, kierując ich bezpośrednio
    do wyznaczonych linków w zależności czy użytkownik jest zalogowany czy nie>
    >> na ten moment to moje przemyślenia 

    W dokumentacji znajdują się wszystkie standardowe metody obsługiwane przez Laravel
    jak również niestandardowe tj. ::match , ::any  

    Czym są rządania sparametryzowane ? 
    Wychodzi na to, że to coś  niezbędnego w routing. Parametry URL
*/
?>