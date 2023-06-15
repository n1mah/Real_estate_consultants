<?php

namespace App\Http\Controllers;

use App\Models\DetailsOfRental;
use App\Models\FinancialLease;
use App\Models\LeaseAgreement;
use App\Models\LeaseAgreementPerson;
use App\Models\RentalPropertyDetails;
use Illuminate\Http\Request;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class PDFController extends Controller
{

    public function CreatePDF(LeaseAgreement $leaseAgreement){
        $path=base_path('resources/fonts/');
    //        dd(1);
        $financial=FinancialLease::where('lease_agreement_id',$leaseAgreement->id);
        $DetailsOfRental=DetailsOfRental::where('lease_agreement_id',$leaseAgreement->id);
        $LeaseAgreementPerson=LeaseAgreementPerson::where('lease_agreement_id',$leaseAgreement->id);
        $RentalPropertyDetails=RentalPropertyDetails::where('lease_agreement_id',$leaseAgreement->id);

        $st="no";
        if ($financial->count()==1 &&$DetailsOfRental->count()==1 &&$LeaseAgreementPerson->count()==1 &&$RentalPropertyDetails->count()==1){
            $st="yes";
        }

//        return view('test',['path'=>$path]);
        $pdf = PDF::loadView('pdf',['path'=>$path,
            'leaseAgreement'=>$leaseAgreement,
            'financial'=>$financial->first(),
            'DetailsOfRental'=>$DetailsOfRental->first(),
            'LeaseAgreementPerson'=>$LeaseAgreementPerson->first(),
            'RentalPropertyDetails'=>$RentalPropertyDetails->first(),
            'st'=>$st,
            ]);
        return $pdf->download('sample.pdf');

    }
}
