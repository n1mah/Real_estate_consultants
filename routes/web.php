<?php

use App\Http\Livewire\People\Add as Person_add;
use App\Http\Livewire\People\Index as People_Index;
use App\Http\Livewire\ContractOfSales\Index as Sale_Index;
use App\Http\Livewire\ContractOfSales\Add as Sale_Add;
use \App\Http\Livewire\ContractOfSales\SingleLevel1;
use App\Http\Livewire\ContractOfSales\Level2 as Sale_Add_Level2;
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
Route::get('/sales', Sale_Index::class)->name("sales");
Route::get('/sales/level1', Sale_Add::class)->name("sales.add");
Route::get('/sales/level1/{contractOfSale}', SingleLevel1::class)->name("sales.level1.single");
Route::get('/sales/level2/{contractOfSale}', Sale_Add_Level2::class)->name("sales.level2");
//Route::post('/people', People_Index::class);

