<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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
use App\Http\Livewire\ContractOfSales\Show as SaleShow;
use App\Http\Livewire\ContractOfSales\Delete as SaleDelete;


use App\Http\Livewire\LeaseAgreements\Index as Rent_Index;
use App\Http\Livewire\LeaseAgreements\Add as Rent_Add;
use App\Http\Livewire\LeaseAgreements\Level2 as Rent_Add_Level2;
use App\Http\Livewire\LeaseAgreements\Level3 as Rent_Add_Level3;
use App\Http\Livewire\LeaseAgreements\Level4 as Rent_Add_Level4;
use App\Http\Livewire\LeaseAgreements\Level5 as Rent_Add_Level5;
use App\Http\Livewire\LeaseAgreements\Level6 as Rent_Add_Level6;
use App\Http\Livewire\LeaseAgreements\Level7 as Rent_Add_Level7;
use App\Http\Livewire\LeaseAgreements\Level8 as Rent_Add_Level8;
use App\Http\Livewire\LeaseAgreements\Level9 as Rent_Add_Level9;
use App\Http\Livewire\LeaseAgreements\Level10 as Rent_Add_Level10;
use App\Http\Livewire\LeaseAgreements\Level11 as Rent_Add_Level11;
use App\Http\Livewire\LeaseAgreements\Level12 as Rent_Add_Level12;
use App\Http\Livewire\LeaseAgreements\Level13 as Rent_Add_Level13;
use App\Http\Livewire\LeaseAgreements\SingleLevel1 as Single1;
use App\Http\Livewire\LeaseAgreements\SingleLevel2 as Single2;
use App\Http\Livewire\LeaseAgreements\SingleLevel3 as Single3;
use App\Http\Livewire\LeaseAgreements\SingleLevel4 as Single4;
use App\Http\Livewire\LeaseAgreements\SingleLevel5 as Single5;
use App\Http\Livewire\LeaseAgreements\SingleLevel6 as Single6;
use App\Http\Livewire\LeaseAgreements\SingleLevel7 as Single7;
use App\Http\Livewire\LeaseAgreements\SingleLevel8 as Single8;
use App\Http\Livewire\LeaseAgreements\SingleLevel9 as Single9;
use App\Http\Livewire\LeaseAgreements\SingleLevel10 as Single10;
use App\Http\Livewire\LeaseAgreements\SingleLevel11 as Single11;
use App\Http\Livewire\LeaseAgreements\SingleLevel12 as Single12;
use App\Http\Livewire\LeaseAgreements\SingleLevel13 as Single13;
use App\Http\Livewire\LeaseAgreements\Show as RentShow;
use App\Http\Livewire\LeaseAgreements\Delete as RentDelete;
use App\Models\DetailsOfRental;
use App\Models\FinancialLease;
use App\Models\LeaseAgreement;
use App\Models\LeaseAgreementPerson;
use App\Models\RentalPropertyDetails;
use Illuminate\Support\Facades\Route;

use Barryvdh\DomPDF\Facade\Pdf;

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
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [UserController::class, 'login'])->name("login");
    Route::post('/login', [UserController::class, 'login_action'])->name("login_proc");
});
Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class,'index'])->name("home");
    Route::get('/dashboard', [DashboardController::class,'index'])->name("dashboard");
    Route::get('/logout', [UserController::class, 'logout'])->name("logout");
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
    Route::get('/sales/show/{contractOfSale}', SaleShow::class)->name("sale.show");
    Route::get('/sale/delete/{contractOfSale}', SaleDelete::class)->name("sale.delete");

    //Route::post('/people', People_Index::class);

    Route::get('/rents', Rent_Index::class)->name("rents");
    Route::get('/rents/level1', Rent_Add::class)->name("rent.add");
    Route::get('/rents/level2/{leaseAgreement}', Rent_Add_Level2::class)->name("rent.level2");
    Route::get('/rents/level3/{leaseAgreement}', Rent_Add_Level3::class)->name("rent.level3");
    Route::get('/rents/level4/{leaseAgreement}', Rent_Add_Level4::class)->name("rent.level4");
    Route::get('/rents/level5/{leaseAgreement}', Rent_Add_Level5::class)->name("rent.level5");
    Route::get('/rents/level6/{leaseAgreement}', Rent_Add_Level6::class)->name("rent.level6");
    Route::get('/rents/level7/{leaseAgreement}', Rent_Add_Level7::class)->name("rent.level7");
    Route::get('/rents/level8/{leaseAgreement}', Rent_Add_Level8::class)->name("rent.level8");
    Route::get('/rents/level9/{leaseAgreement}', Rent_Add_Level9::class)->name("rent.level9");
    Route::get('/rents/level10/{leaseAgreement}', Rent_Add_Level10::class)->name("rent.level10");
    Route::get('/rents/level11/{leaseAgreement}', Rent_Add_Level11::class)->name("rent.level11");
    Route::get('/rents/level12/{leaseAgreement}', Rent_Add_Level12::class)->name("rent.level12");
    Route::get('/rents/level13/{leaseAgreement}', Rent_Add_Level13::class)->name("rent.level13");
    Route::get('/rents/level1/single/{leaseAgreement}', Single1::class)->name("rent.level1.single");
    Route::get('/rents/level2/single/{leaseAgreement}', Single2::class)->name("rent.level2.single");
    Route::get('/rents/level3/single/{leaseAgreement}', Single3::class)->name("rent.level3.single");
    Route::get('/rents/level4/single/{leaseAgreement}', Single4::class)->name("rent.level4.single");
    Route::get('/rents/level5/single/{leaseAgreement}', Single5::class)->name("rent.level5.single");
    Route::get('/rents/level6/single/{leaseAgreement}', Single6::class)->name("rent.level6.single");
    Route::get('/rents/level7/single/{leaseAgreement}', Single7::class)->name("rent.level7.single");
    Route::get('/rents/level8/single/{leaseAgreement}', Single8::class)->name("rent.level8.single");
    Route::get('/rents/level9/single/{leaseAgreement}', Single9::class)->name("rent.level9.single");
    Route::get('/rents/level10/single/{leaseAgreement}', Single10::class)->name("rent.level10.single");
    Route::get('/rents/level11/single/{leaseAgreement}', Single11::class)->name("rent.level11.single");
    Route::get('/rents/level12/single/{leaseAgreement}', Single12::class)->name("rent.level12.single");
    Route::get('/rents/level13/single/{leaseAgreement}', Single13::class)->name("rent.level13.single");
    Route::get('/rents/show/{leaseAgreement}', RentShow::class)->name("rent.show");
    Route::get('/rents/delete/{leaseAgreement}', RentDelete::class)->name("rent.delete");
});


Route::get('/pdf/{leaseAgreement}', function (LeaseAgreement $leaseAgreement){
    $financial=FinancialLease::where('lease_agreement_id',$leaseAgreement->id);
    $DetailsOfRental=DetailsOfRental::where('lease_agreement_id',$leaseAgreement->id);
    $LeaseAgreementPerson=LeaseAgreementPerson::where('lease_agreement_id',$leaseAgreement->id);
    $RentalPropertyDetails=RentalPropertyDetails::where('lease_agreement_id',$leaseAgreement->id);

    $st="no";
    if ($financial->count()==1 &&$DetailsOfRental->count()==1 &&$LeaseAgreementPerson->count()==1 &&$RentalPropertyDetails->count()==1){
        $st="yes";
    }

    return view('pdf',
        [
            'leaseAgreement'=>$leaseAgreement,
            'financial'=>$financial->first(),
            'DetailsOfRental'=>$DetailsOfRental->first(),
            'LeaseAgreementPerson'=>$LeaseAgreementPerson->first(),
            'RentalPropertyDetails'=>$RentalPropertyDetails->first(),
            'st'=>$st,
        ]);
});

Route::get('/pdf/p/{leaseAgreement}',function (LeaseAgreement $leaseAgreement){
    $financial=FinancialLease::where('lease_agreement_id',$leaseAgreement->id);
    $DetailsOfRental=DetailsOfRental::where('lease_agreement_id',$leaseAgreement->id);
    $LeaseAgreementPerson=LeaseAgreementPerson::where('lease_agreement_id',$leaseAgreement->id);
    $RentalPropertyDetails=RentalPropertyDetails::where('lease_agreement_id',$leaseAgreement->id);

    $st="no";
    if ($financial->count()==1 &&$DetailsOfRental->count()==1 &&$LeaseAgreementPerson->count()==1 &&$RentalPropertyDetails->count()==1){
        $st="yes";
    }

    $pdf = PDF::loadView('pdf',[
        'leaseAgreement'=>$leaseAgreement,
        'financial'=>$financial->first(),
        'DetailsOfRental'=>$DetailsOfRental->first(),
        'LeaseAgreementPerson'=>$LeaseAgreementPerson->first(),
        'RentalPropertyDetails'=>$RentalPropertyDetails->first(),
        'st'=>$st,
    ])->setPaper('a3');
//    $pdf->loadHTML('<h1>Test</h1>');
    return $pdf->stream();
});
