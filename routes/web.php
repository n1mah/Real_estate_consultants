<?php

use App\Http\Livewire\People\Add as Person_add;
use App\Http\Livewire\People\Index as People_Index;
use App\Http\Livewire\ContractOfSales\Index as Sale_Index;
use App\Http\Livewire\ContractOfSales\Add as Sale_Add;
use App\Http\Livewire\ContractOfSales\SingleLevel1;
use App\Http\Livewire\ContractOfSales\SingleLevel2;
use App\Http\Livewire\ContractOfSales\SingleLevel3;
use App\Http\Livewire\ContractOfSales\SingleLevel4;
use App\Http\Livewire\ContractOfSales\SingleLevel5;
use App\Http\Livewire\ContractOfSales\SingleLevel6;
use App\Http\Livewire\ContractOfSales\SingleLevel7;
use App\Http\Livewire\ContractOfSales\SingleLevel8;
use App\Http\Livewire\ContractOfSales\SingleLevel9;
use App\Http\Livewire\ContractOfSales\SingleLevel10;
use App\Http\Livewire\ContractOfSales\Level2 as Sale_Add_Level2;
use App\Http\Livewire\ContractOfSales\Level3 as Sale_Add_Level3;
use App\Http\Livewire\ContractOfSales\Level4 as Sale_Add_Level4;
use App\Http\Livewire\ContractOfSales\Level5 as Sale_Add_Level5;
use App\Http\Livewire\ContractOfSales\Level6 as Sale_Add_Level6;
use App\Http\Livewire\ContractOfSales\Level7 as Sale_Add_Level7;
use App\Http\Livewire\ContractOfSales\Level8 as Sale_Add_Level8;
use App\Http\Livewire\ContractOfSales\Level9 as Sale_Add_Level9;
use App\Http\Livewire\ContractOfSales\Level10 as Sale_Add_Level10;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//$user=\App\Models\User::findOrFail(1);
//Auth::login($user);

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
Route::get('/sales/level1/single/{contractOfSale}', SingleLevel1::class)->name("sales.level1.single");
Route::get('/sales/level2/single/{contractOfSale}', SingleLevel2::class)->name("sales.level2.single");
Route::get('/sales/level3/single/{contractOfSale}', SingleLevel3::class)->name("sales.level3.single");
Route::get('/sales/level4/single/{contractOfSale}', SingleLevel4::class)->name("sales.level4.single");
Route::get('/sales/level5/single/{contractOfSale}', SingleLevel5::class)->name("sales.level5.single");
Route::get('/sales/level6/single/{contractOfSale}', SingleLevel6::class)->name("sales.level6.single");
Route::get('/sales/level7/single/{contractOfSale}', SingleLevel7::class)->name("sales.level7.single");
Route::get('/sales/level8/single/{contractOfSale}', SingleLevel8::class)->name("sales.level8.single");
Route::get('/sales/level9/single/{contractOfSale}', SingleLevel9::class)->name("sales.level9.single");
Route::get('/sales/level10/single/{contractOfSale}', SingleLevel10::class)->name("sales.level10.single");
Route::get('/sales/level2/{contractOfSale}', Sale_Add_Level2::class)->name("sales.level2");
Route::get('/sales/level3/{contractOfSale}', Sale_Add_Level3::class)->name("sales.level3");
Route::get('/sales/level4/{contractOfSale}', Sale_Add_Level4::class)->name("sales.level4");
Route::get('/sales/level5/{contractOfSale}', Sale_Add_Level5::class)->name("sales.level5");
Route::get('/sales/level6/{contractOfSale}', Sale_Add_Level6::class)->name("sales.level6");
Route::get('/sales/level7/{contractOfSale}', Sale_Add_Level7::class)->name("sales.level7");
Route::get('/sales/level8/{contractOfSale}', Sale_Add_Level8::class)->name("sales.level8");
Route::get('/sales/level9/{contractOfSale}', Sale_Add_Level9::class)->name("sales.level9");
Route::get('/sales/level10/{contractOfSale}', Sale_Add_Level10::class)->name("sales.level10");
//Route::post('/people', People_Index::class);

