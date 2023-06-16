<!doctype html>
<html lang="fa">
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Document</title>

<head>
    @php

            $DefaultX=0;
            $DefaultY=0;
            $a='';

            $line1_1=6.5;
            $line1_2=7.0;
            $line1_3=7.55;
            $line1_4=8.0;
            $line1_5=8.5;
            $line1_6=9.0;
            $line1_7=9.5;
            $line1_8=10.0;
            $line2_1=11.0;
            $line2_2=11.45;
            $line2_3=11.85;
            $line2_4=12.3;
            $line3_1=13.2;
            $line4_1=14.2;
            $line4_2=14.65;
            $line4_3=15.1;
            $line4_4=15.65;
            $line4_5=16.1;
            $line4_6=17.05;
            $line5_1=18.90;
            $line6_1=20.85;
            $line6_2=21.9;
            $line6_3=27.1;
            $line10_1=32.75;
            $line11_1=33.7;
            $line11_2=34.35;
            $line12_1=35.35;
            $line13_1=36.6;
            $line13_2=37.2;

//                    ماده ۲
            $entirety=[
                'data'=>$RentalPropertyDetails->entirety,
                'x'=>4.5+$DefaultX,
                'y'=>$line2_1+$DefaultY
            ];
//            $type_of_lease=[
//                'data'=>$RentalPropertyDetails->type_of_lease,
//                'x'=>6.6+$DefaultX,
//                'y'=>$line2_1+$DefaultY
//            ];
              $type_of_lease_line=[
                'data'=>$RentalPropertyDetails->type_of_lease,
                'x'=>6.6+$DefaultX,
                'x2'=>8.7+$DefaultX,
                'y'=>$line2_1+$DefaultY-0.06
             ];
            $title=[
                'data'=>$RentalPropertyDetails->title,
                'x'=>8.85+$DefaultX,
                'y'=>$line2_1+$DefaultY
            ];
            $address=[
                'data'=>$RentalPropertyDetails->address,
                'x'=>12.95+$DefaultX,
                'y'=>$line2_1+$DefaultY
            ];
            $house_number=[
                'data'=>$RentalPropertyDetails->house_number,
                'x'=>22.85+$DefaultX,
                'y'=>$line2_1+$DefaultY
            ];
            $sub_part_address=[
                'data'=>$RentalPropertyDetails->sub_part_address,
                'x'=>25.7+$DefaultX,
                'y'=>$line2_1+$DefaultY
            ];
            $main_part_address=[
                'data'=>$RentalPropertyDetails->main_part_address,
                'x'=>2.6+$DefaultX,
                'y'=>$line2_2+$DefaultY
            ];
            $part=[
                'data'=>$RentalPropertyDetails->part,
                'x'=>4.55+$DefaultX,
                'y'=>$line2_2+$DefaultY
            ];
            $house_area=[
                'data'=>$RentalPropertyDetails->house_area,
                'x'=>7.7+$DefaultX,
                'y'=>$line2_2+$DefaultY
            ];
            $title_deeds_number=[
                'data'=>$RentalPropertyDetails->title_deeds_number,
                'x'=>14.8+$DefaultX,
                'y'=>$line2_2+$DefaultY
            ];
            $name=[
                'data'=>$RentalPropertyDetails->name,
                'x'=>18.85+$DefaultX,
                'y'=>$line2_2+$DefaultY
            ];
            $bedroom=[
                'data'=>$RentalPropertyDetails->bedroom,
                'x'=>23.7+$DefaultX,
                'y'=>$line2_2+$DefaultY
            ];
            $membership_right=json_decode($RentalPropertyDetails->membership_right);
            $membership_right1=[];
            function membership_right_check1($str)
            {

                if ($str=="آب" || $str=="برق" || $str=="گاز اشتراکی" || $str=="گاز اختصاصی" || $str=="شوفاژ روشن" || $str=="شوفاژ غیر روشن" || $str=="کولر" || $str=="پارکینگ دارد")
                    return $str;
                return  null;
            }
            $membership_right1=(array_filter($membership_right,"membership_right_check1"));
            $membership_right_line1=[
                'data'=>$membership_right1,
                'x'=>3.25+$DefaultX,
                'x2'=>11.9+$DefaultX,
                 'y'=>$line2_3+$DefaultY-0.06
            ];


//            $membership_right_electricity=[
//                'data'=>$membership_right,
//                'x'=>0+$DefaultX,
//                'y'=>$line2_3+$DefaultY
//            ];
//            $membership_right_water=[
//                'data'=>$membership_right,
//                'x'=>0+$DefaultX,
//                'y'=>$line2_3+$DefaultY
//            ];
//            $membership_right_gas=[
//                'data'=>$membership_right,
//                'x'=>0+$DefaultX,
//                'y'=>$line2_3+$DefaultY
//            ];
//            $membership_right_gas_private=[
//                'data'=>$membership_right,
//                'x'=>0+$DefaultX,
//                'y'=>$line2_3+$DefaultY
//            ];
//            $membership_right_gas_public=[
//                'data'=>$membership_right,
//                'x'=>0+$DefaultX,
//                'y'=>$line2_3+$DefaultY
//            ];
//            $membership_right_shoo=[
//                'data'=>$membership_right,
//                'x'=>0+$DefaultX,
//                'y'=>$line2_3+$DefaultY
//            ];
//            $membership_right_shoo_on=[
//                'data'=>$membership_right,
//                'x'=>0+$DefaultX,
//                'y'=>$line2_3+$DefaultY
//            ];
//            $membership_right_shoo_off=[
//                'data'=>$membership_right,
//                'x'=>0+$DefaultX,
//                'y'=>$line2_3+$DefaultY
//            ];
//            $membership_right_cooling=[
//                'data'=>$membership_right,
//                'x'=>0+$DefaultX,
//                'y'=>$line2_3+$DefaultY
//            ];
//            $membership_right_parking=[
//                'data'=>$membership_right,
//                'x'=>0+$DefaultX,
//                'y'=>$line2_3+$DefaultY
//            ];
            $membership_right_parking_number=[
                'data'=>$RentalPropertyDetails->parking,
                'x'=>12.8+$DefaultX,
                'y'=>$line2_3+$DefaultY
            ];

            $membership_right_warehouse=[
                'data'=>$membership_right,
                'x'=>0+$DefaultX,
                'y'=>$line2_3+$DefaultY
            ];

            function membership_right_check2($str)
            {
                if ($str=="انباری دارد")
                    return $str;
                return null;
            }
            $membership_right2=(array_filter($membership_right,"membership_right_check2"));
            $membership_right2_warehouse=null;
            if(in_array("انباری دارد", $membership_right2)){
                $membership_right2_warehouse=[
                'data'=>$RentalPropertyDetails->warehouse,
                'x'=>15.2+$DefaultX,
                'y'=>$line2_3+$DefaultY
            ];
            }else{
                $membership_right2_warehouse=[
                'data'=>"ندارد",
                'x'=>15.2+$DefaultX,
                'y'=>$line2_3+$DefaultY
            ];
}
//            $membership_right_warehouse_number=[
//                'data'=>$RentalPropertyDetails->warehouse,
//                'x'=>15.2+$DefaultX,
//                'y'=>$line2_3+$DefaultY
//            ];
//            $membership_right_phone_in=[
//                'data'=>$membership_right,
//                'x'=>0+$DefaultX,
//                'y'=>$line2_3+$DefaultY
//            ];
//            $membership_right_phone_out=[
//                'data'=>$membership_right,
//                'x'=>0+$DefaultX,
//                'y'=>$line2_3+$DefaultY
//            ];

            $membership_right3=[];
            function membership_right_check3($str)
            {

                if ($str=="تلفن دایر" || $str=="تلفن غیر دایر")
                    return $str;
                return  null;
            }
            $membership_right3=(array_filter($membership_right,"membership_right_check3"));
//            dd($membership_right3);
            if((in_array("تلفن غیر دایر", $membership_right3) || in_array("تلفن دایر", $membership_right3)) &&  count($membership_right3)){
                foreach ($membership_right3 as $membership_right3_item)
                $membership_right3_data=$membership_right3_item;
            }else{
            $membership_right3_data="";
            }
            $membership_right_line3=[
            'data'=>$membership_right3_data,
            'x'=>17.75+$DefaultX,
            'x2'=>19.75+$DefaultX,
             'y'=>$line2_3+$DefaultY-0.06
        ];



            if(in_array("تلفن غیر دایر", $membership_right3) || in_array("تلفن دایر", $membership_right3)){
              $membership_right_phone_number=[
                'data'=>$RentalPropertyDetails->telephone,
                'x'=>20.3+$DefaultX,
                'y'=>$line2_3+$DefaultY
            ];
            }else{
                 $membership_right_phone_number=[
                'data'=>"",
                'x'=>20.3+$DefaultX,
                'y'=>$line2_3+$DefaultY
            ];
}

            $postal_code=[
                'data'=>$RentalPropertyDetails->postal_code,
                'x'=>3.45+$DefaultX,
                'y'=>$line2_4+$DefaultY
            ];

//                    ماده ۳
            $rental_period=[
                'data'=>$DetailsOfRental->rental_period,
                'x'=>3.0+$DefaultX+1,
                'y'=>$line3_1+$DefaultY
            ];
//            $rental_period_type=[
//                'data'=>$DetailsOfRental->rental_period_type,
//                'x'=>6.8+$DefaultX,
//                'y'=>$line3_1+$DefaultY
//            ];
            $rental_period_type_line=[
                'data'=>$DetailsOfRental->rental_period_type,
                'x'=>6.8+$DefaultX,
                'x2'=>7.7+$DefaultX,
                'y'=>$line3_1+$DefaultY-0.06
             ];
            $f=$DetailsOfRental->from;
            $from=[
                'data'=>\Morilog\Jalali\Jalalian::forge($f)->format('Y/m/d'),
                'x'=>9.4+$DefaultX+0.2,
                'y'=>$line3_1+$DefaultY-0.05
            ];
//            $from_day=[
//                'data'=>$f,
//                'x'=>9.4+$DefaultX,
//                'y'=>$line3_1+$DefaultY
//            ];
//            $from_month=[
//                'data'=>$f,
//                'x'=>9.4+$DefaultX,
//                'y'=>$line3_1+$DefaultY
//            ];
//            $from_year=[
//                'data'=>$f,
//                'x'=>9.4+$DefaultX,
//                'y'=>$line3_1+$DefaultY
//            ];
            $u=$DetailsOfRental->until;
            $until=[
                'data'=>\Morilog\Jalali\Jalalian::forge($u)->format('Y/m/d'),
                'x'=>11.5+$DefaultX+0.2,
                'y'=>$line3_1+$DefaultY-0.05
            ];
//            $until_day=[
//                'data'=>$u,
//                'x'=>11.5+$DefaultX,
//                'y'=>$line3_1+$DefaultY
//            ];
//            $until_month=[
//                'data'=>$u,
//                'x'=>11.5+$DefaultX,
//                'y'=>$line3_1+$DefaultY
//            ];
//            $until_year=[
//                'data'=>$u,
//                'x'=>11.5+$DefaultX,
//                'y'=>$line3_1+$DefaultY
//            ];

//                    ماده 4

            $lease_rial=[
                'data'=>$financial->lease_amount,
                'x'=>4.4+$DefaultX,
                'y'=>$line4_1+$DefaultY
            ];
            $monthly_rental_amount_rial=[
                'data'=>$financial->monthly_rental_amount,
                'x'=>12.1+$DefaultX,
                'y'=>$line4_1+$DefaultY
             ];
            $at_first_data=$financial->at_first;
            $at_first=[
                'data'=>$at_first_data,
                'x'=>21.08+$DefaultX,
                'y'=>$line4_1+$DefaultY
            ];
            $at_first_first=[
                'data'=>$at_first_data,
                'x'=>21.08+$DefaultX,
                'y'=>$line4_1+$DefaultY
            ];
            $at_first_last=[
                'data'=>$at_first_data,
                'x'=>21.08+$DefaultX,
                'y'=>$line4_1+$DefaultY
    ];
            $mortgage_rial=[
                'data'=>$financial->mortgage,
                'x'=>3.0+$DefaultX,
                'y'=>$line4_2+$DefaultY
    ];
            $mortgage_rial_word=[
                'data'=>$financial->mortgage,
                'x'=>10.1+$DefaultX,
                'y'=>$line4_2+$DefaultY
    ];

            $rent_rial=[
                'data'=>$financial->rent,
                'x'=>4.95+$DefaultX,
                'y'=>$line4_3+$DefaultY
    ];
            $rent_tooman=[
                'data'=>$financial->rent,
                'x'=>10.9+$DefaultX,
                'y'=>$line4_3+$DefaultY
    ];
            $payment_type_data=$financial->payment_type;
            $payment_type=[
                'data'=>$payment_type_data,
                'x'=>14.95+$DefaultX,
                'y'=>$line4_3+$DefaultY
    ];
            $payment_type_cash=[
                'data'=>$payment_type_data,
                'x'=>14.95+$DefaultX,
                'y'=>$line4_3+$DefaultY
    ];
            $payment_type_cheque=[
                'data'=>$payment_type_data,
                'x'=>14.95+$DefaultX,
                'y'=>$line4_3+$DefaultY
    ];
            $cheque=[
                'data'=>$financial->cheque,
                'x'=>16.3+$DefaultX,
                'y'=>$line4_3+$DefaultY
    ];
            $bank=[
                'data'=>$financial->bank,
                'x'=>18.45+$DefaultX,
                'y'=>$line4_3+$DefaultY
    ];
            $branch=[
                'data'=>$financial->branch,
                'x'=>20.2+$DefaultX,
                'y'=>$line4_3+$DefaultY
    ];

            $deposit_rial=[
                'data'=>$financial->deposit,
                'x'=>3.78+$DefaultX,
                'y'=>$line4_4+$DefaultY
    ];
            $deposit_return_date=[
                'data'=>$financial->deposit_return_date,
                'x'=>8.15+$DefaultX,
                'y'=>$line4_4+$DefaultY
    ];
            $penalty_for_non_payment_rial=[
                'data'=>$DetailsOfRental->penalty_for_non_payment,
                'x'=>19.75+$DefaultX,
                'y'=>$line4_5+$DefaultY
    ];
            $penalty_for_non_return_rial=[
                'data'=>$DetailsOfRental->penalty_for_non_return,
                'x'=>3.7+$DefaultX,
                'y'=>$line4_6+$DefaultY
    ];

//                    ماده 5
            $delivery_time=[
                'data'=>$DetailsOfRental->delivery_time,
                'x'=>4.55+$DefaultX,
                'y'=>$line5_1+$DefaultY
    ];
            $penalty_for_non_delivery_rial=[
                'data'=>$DetailsOfRental->penalty_for_non_delivery,
                'x'=>22.75+$DefaultX,
                'y'=>$line5_1+$DefaultY
    ];

//                    ماده 6
            $others=[
                'data'=>$DetailsOfRental->others,
                'x'=>18.2+$DefaultX,
                'y'=>$line6_1+$DefaultY
    ];
            $damages_for_non_fulfillment_of_obligations_rial=[
                'data'=>$DetailsOfRental->damages_for_non_fulfillment_of_obligations,
                'x'=>2.1+$DefaultX,
                'y'=>$line6_2+$DefaultY
    ];
            $penalty_for_non_evacuation_rial=[
                'data'=>$DetailsOfRental->penalty_for_non_evacuation,
                'x'=>3.25+$DefaultX,
                'y'=>$line6_3+$DefaultY
    ];

//                    ماده 7
//                    ماده 8
//                    ماده 9
//                    ماده 10
            $arbitration_data=$DetailsOfRental->arbitration;
            $arbitration=[
                'data'=>$arbitration_data,
                'x'=>24.4+$DefaultX,
                'y'=>$line10_1+$DefaultY
    ];
            $arbitration_yes=[
                'data'=>$arbitration_data,
                'x'=>24.4+$DefaultX,
                'y'=>$line10_1+$DefaultY
    ];
            $arbitration_no=[
                'data'=>$arbitration_data,
                'x'=>24.4+$DefaultX,
                'y'=>$line10_1+$DefaultY
    ];

//                    ماده 11
            $city=[
                'data'=>$financial->city,
                'x'=>6.1+$DefaultX,
                'y'=>$line11_1+$DefaultY
    ];
            $wage_rial=[
                'data'=>$financial->wage,
                'x'=>11.12+$DefaultX,
                'y'=>$line11_1+$DefaultY
    ];
            $amount_received_each_rial=[
                'data'=>$financial->amount_received_each,
                'x'=>22.85+$DefaultX,
                'y'=>$line11_1+$DefaultY
    ];
            $tax_percent=[
                'data'=>$financial->tax,
                'x'=>9.78+$DefaultX,
                'y'=>$line11_2+$DefaultY
    ];

//                    ماده 12
            $signature_date=[
                'data'=>$leaseAgreement->signature_date,
                'x'=>4.2+$DefaultX,
                'y'=>$line12_1+$DefaultY
    ];
            $signature_hour=[
                'data'=>$leaseAgreement->signature_hour,
                'x'=>6.4+$DefaultX,
                'y'=>$line12_1+$DefaultY
    ];
            $user_membership_number=[
                'data'=>$leaseAgreement->user_id,
                'x'=>9.78+$DefaultX,
                'y'=>$line12_1+$DefaultY
    ];
            $user_manager=[
                'data'=>$leaseAgreement->user_id,
                'x'=>12.25+$DefaultX,
                'y'=>$line12_1+$DefaultY
    ];
            $user_address=[
                'data'=>$leaseAgreement->user_id,
                'x'=>15.4+$DefaultX,
                'y'=>$line12_1+$DefaultY
    ];

//                    ماده 12
            $comments=[
                'data'=>$leaseAgreement->comment,
                'x'=>2.2+$DefaultX,
                'y'=>$line13_1+$DefaultY
    ];





        function MakeLine($data){
            $label=$data['data'];
            $x1=$data['x'];
            $x2=$data['x2'];
            $y=$data['y'];
            $width=$x2-$x1;
            if (is_array($label)){
               $label= implode(" / ", $label);
            }
            echo "
            <div class='line' style='width:{$width}cm;right:{$x1}cm;top:{$y}cm'>
                {$label}
            </div>
            ";
        }
            function MakeElement($data,$class=null){
                echo "<p class='fixed {$class}' style='right: {$data['x']}cm;top:{$data['y']}cm;'>{$data['data']}</p>";
            }

     @endphp
    <style>
        .line{
            height: 0.35cm;
            background: #282828;
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            font-size: 14.2px;
        }
            *{
                font-size: 13px;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                direction: rtl;
            }
            body {
                margin: 0;
                color: #000;
                background-color: #fff;
                direction: rtl;
                font-family: 'samim';
                font-size: 8px;
            }
            .fixed{
                position: fixed;
                display: block;
                width: 50%;
            }
            html, body, div, span, applet, object, iframe,
            h1, h2, h3, h4, h5, h6, p, blockquote, pre,
            a, abbr, acronym, address, big, cite, code,
            del, dfn, em, img, ins, kbd, q, s, samp,
            small, strike, strong, sub, sup, tt, var,
            b, u, i, center,
            dl, dt, dd, ol, ul, li,
            fieldset, form, label, legend,
            table, caption, tbody, tfoot, thead, tr, th, td,
            article, aside, canvas, details, embed,
            figure, figcaption, footer, header, hgroup,
            menu, nav, output, ruby, section, summary,
            time, mark, audio, video {
                margin: 0;
                padding: 0;
                border: 0;
                vertical-align: baseline;
            }

    </style>
</head>
<body>
@php
    MakeElement($entirety);
    MakeElement($title);
//    MakeElement($type_of_lease);

    MakeLine($type_of_lease_line);
    MakeLine($membership_right_line1);
    MakeElement($membership_right2_warehouse);
    MakeElement($membership_right_parking_number);
    MakeLine($membership_right_line3);
    MakeElement($membership_right_phone_number);
    MakeElement($address);
    MakeElement($house_number);
    MakeElement($sub_part_address);
    MakeElement($main_part_address);
    MakeElement($part);
    MakeElement($house_area);
    MakeElement($title_deeds_number);
    MakeElement($name);
    MakeElement($bedroom);
    MakeElement($postal_code);



    MakeElement($rental_period);
//    MakeElement($rental_period_type);
    MakeLine($rental_period_type_line);
    MakeElement($from);
    MakeElement($until);
    MakeElement($lease_rial);
    MakeElement($monthly_rental_amount_rial);
//    MakeElement($at_first_data);
    MakeElement($mortgage_rial);
    MakeElement($mortgage_rial_word);
    MakeElement($rent_rial);
    MakeElement($rent_tooman);
    MakeElement($cheque);
    MakeElement($bank);
    MakeElement($branch);
    MakeElement($deposit_rial);
    MakeElement($deposit_rial);
    MakeElement($penalty_for_non_payment_rial);
    MakeElement($penalty_for_non_return_rial);
    MakeElement($delivery_time);
    MakeElement($penalty_for_non_delivery_rial);
    MakeElement($others);
    MakeElement($damages_for_non_fulfillment_of_obligations_rial);
    MakeElement($penalty_for_non_evacuation_rial);
//    MakeElement($arbitration);
    MakeElement($city);
    MakeElement($wage_rial);
    MakeElement($amount_received_each_rial);
    MakeElement($tax_percent);
    MakeElement($signature_date);
    MakeElement($signature_hour);
    MakeElement($user_membership_number);
    MakeElement($comments);

@endphp
</body>
</html>
