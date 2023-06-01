<?php

use App\Http\Livewire\People\Form as Person_add;
use App\Http\Livewire\People\Index as People_Index;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
//    $people= \App\Models\Person::find(5);
//    dd($people);

//    $people= \App\Models\Person::find(4)->contract_of_sales()->get();
//    echo ($people->first()->pivot->created_at);

});
Route::get('/people', People_Index::class)->name("people");
Route::get('/people/add', Person_add::class)->name("people.add");
//Route::post('/people', People_Index::class);

