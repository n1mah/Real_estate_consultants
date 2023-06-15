<!doctype html>
<html lang="en">
<head>
    @php

            $DefaultX=0;
            $DefaultY=0;


//                    ماده ۲
            $entirety=['x'=>0,'y'=>0];
            $type_of_lease=['x'=>0,'y'=>0];
            $title=['x'=>0,'y'=>0];
            $address=['x'=>0,'y'=>0];
            $house_number=['x'=>0,'y'=>0];
            $sub_part_address=['x'=>0,'y'=>0];
            $main_part_address=['x'=>0,'y'=>0];
            $part=['x'=>0,'y'=>0];
            $house_area=['x'=>0,'y'=>0];
            $title_deeds_number=['x'=>0,'y'=>0];
            $name=['x'=>0,'y'=>0];
            $bedroom=['x'=>0,'y'=>0];
            $membership_right_electricity=['x'=>0,'y'=>0];
            $membership_right_water=['x'=>0,'y'=>0];
            $membership_right_gas=['x'=>0,'y'=>0];
            $membership_right_gas_private=['x'=>0,'y'=>0];
            $membership_right_gas_public=['x'=>0,'y'=>0];
            $membership_right_shoo=['x'=>0,'y'=>0];
            $membership_right_shoo_on=['x'=>0,'y'=>0];
            $membership_right_shoo_off=['x'=>0,'y'=>0];
            $membership_right_cooling=['x'=>0,'y'=>0];
            $membership_right_parking=['x'=>0,'y'=>0];
            $membership_right_parking_number=['x'=>0,'y'=>0];
            $membership_right_warehouse=['x'=>0,'y'=>0];
            $membership_right_warehouse_number=['x'=>0,'y'=>0];
            $membership_right_phone_in=['x'=>0,'y'=>0];
            $membership_right_phone_out=['x'=>0,'y'=>0];
            $membership_right_phone_number=['x'=>0,'y'=>0];
            $postal_code=['x'=>0,'y'=>0];

//                    ماده ۳
            $rental_period=['x'=>0,'y'=>0];
            $rental_period_type=['x'=>0,'y'=>0];
            $from=['x'=>0,'y'=>0];
            $from_day=['x'=>0,'y'=>0];
            $from_month=['x'=>0,'y'=>0];
            $from_year=['x'=>0,'y'=>0];
            $until=['x'=>0,'y'=>0];
            $until_day=['x'=>0,'y'=>0];
            $until_month=['x'=>0,'y'=>0];
            $until_year=['x'=>0,'y'=>0];

//                    ماده 4
            $lease=['x'=>0,'y'=>0];
            $lease_rial=['x'=>0,'y'=>0];
            $monthly_rental_amount=['x'=>0,'y'=>0];
            $monthly_rental_amount_rial=['x'=>0,'y'=>0];
            $at_first=['x'=>0,'y'=>0];
            $at_first_first=['x'=>0,'y'=>0];
            $at_first_last=['x'=>0,'y'=>0];
            $mortgage=['x'=>0,'y'=>0];
            $mortgage_rial=['x'=>0,'y'=>0];
            $mortgage_rial_word=['x'=>0,'y'=>0];
            $rent=['x'=>0,'y'=>0];
            $rent_rial=['x'=>0,'y'=>0];
            $rent_tooman=['x'=>0,'y'=>0];
            $payment_type=['x'=>0,'y'=>0];
            $payment_type_cash=['x'=>0,'y'=>0];
            $payment_type_cheque=['x'=>0,'y'=>0];
            $cheque=['x'=>0,'y'=>0];
            $bank=['x'=>0,'y'=>0];
            $branch=['x'=>0,'y'=>0];
            $deposit=['x'=>0,'y'=>0];
            $deposit_rial=['x'=>0,'y'=>0];
            $deposit_return_date=['x'=>0,'y'=>0];
            $penalty_for_non_payment_rial=['x'=>0,'y'=>0];
            $penalty_for_non_return_rial=['x'=>0,'y'=>0];

//                    ماده 5
            $delivery_time=['x'=>0,'y'=>0];
            $penalty_for_non_delivery_rial=['x'=>0,'y'=>0];

//                    ماده 6
            $others=['x'=>0,'y'=>0];
            $damages_for_non_fulfillment_of_obligations_rial=['x'=>0,'y'=>0];
            $penalty_for_non_evacuation_rial=['x'=>0,'y'=>0];

//                    ماده 7
//            $others=['x'=>0,'y'=>0];

//                    ماده 8
//                    ماده 9
//                    ماده 10
            $arbitration=['x'=>0,'y'=>0];
            $arbitration_yes=['x'=>0,'y'=>0];
            $arbitration_no=['x'=>0,'y'=>0];

//                    ماده 11
            $city=['x'=>0,'y'=>0];
            $wage_rial=['x'=>0,'y'=>0];
            $amount_received_each_rial=['x'=>0,'y'=>0];
            $tax_percent=['x'=>0,'y'=>0];

//                    ماده 11
            $signature_date=['x'=>0,'y'=>0];
            $signature_hour=['x'=>0,'y'=>0];
            $user_membership_number=['x'=>0,'y'=>0];
            $user_manager=['x'=>0,'y'=>0];
            $user_address=['x'=>0,'y'=>0];

//                    ماده 12
            $comments=['x'=>0,'y'=>0];



     @endphp
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    <style>
            *{
                font-size: 13px;
            }
            body {
                margin: 0;
                color: #000;
                background-color: #fff;
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
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
            }
            /* HTML5 display-role reset for older browsers */
            article, aside, details, figcaption, figure,
            footer, header, hgroup, menu, nav, section {
                display: block;
            }
            body {
                line-height: 1;
            }
            ol, ul {
                list-style: none;
            }
            blockquote, q {
                quotes: none;
            }
            blockquote:before, blockquote:after,
            q:before, q:after {
                content: '';
                content: none;
            }
            table {
                border-collapse: collapse;
                border-spacing: 0;
            }
            h1{
                position: fixed;
                right: 0;
                top:0;
            }

    </style>
</head>
<body>
<h1>
    assad
</h1>
<h2>
    ssadasd
</h2>
<h3>
    sadasd
</h3>

</body>
</html>
