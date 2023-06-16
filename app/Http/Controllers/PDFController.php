<?php

namespace App\Http\Controllers;

use App\Models\DetailsOfRental;
use App\Models\FinancialLease;
use App\Models\LeaseAgreement;
use App\Models\LeaseAgreementPerson;
use App\Models\RentalPropertyDetails;
use App\Models\User;
use Illuminate\Http\Request;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class PDFController extends Controller
{

    public function CreatePDF(LeaseAgreement $leaseAgreement){
        $path=base_path('resources/fonts/');
        $financial=FinancialLease::where('lease_agreement_id',$leaseAgreement->id);
        $DetailsOfRental=DetailsOfRental::where('lease_agreement_id',$leaseAgreement->id);
        $LeaseAgreementPerson=LeaseAgreementPerson::where('lease_agreement_id',$leaseAgreement->id);
//        $LeaseAgreementPersonTenant=LeaseAgreementPerson::where('lease_agreement_id',$leaseAgreement->id)->where('is_tenant',true);
//        $LeaseAgreementPersonLessor=LeaseAgreementPerson::where('lease_agreement_id',$leaseAgreement->id)->where('is_tenant',false);
        $RentalPropertyDetails=RentalPropertyDetails::where('lease_agreement_id',$leaseAgreement->id);
        $user=User::where('id',$leaseAgreement->user_id);

        $st="no";
        if ($financial->count()==1 &&$DetailsOfRental->count()==1 && $LeaseAgreementPerson->count()>1 &&$RentalPropertyDetails->count()==1){
            $st="yes";
        }
        $pdf = PDF::loadView('pdf',['path'=>$path,
            'leaseAgreement'=>$leaseAgreement,
            'financial'=>$financial->first(),
            'DetailsOfRental'=>$DetailsOfRental->first(),
            'LeaseAgreementPerson'=>$LeaseAgreementPerson->get(),
            'LeaseAgreementPersonTenant'=>$leaseAgreement->peopleTenants()->get(),
            'LeaseAgreementPersonLessor'=>$leaseAgreement->peopleLessors()->get(),
            'RentalPropertyDetails'=>$RentalPropertyDetails->first(),
            'user'=>$user->first(),
            'st'=>$st,
            ]);
        return $pdf->download('sample.pdf');

    }
}
