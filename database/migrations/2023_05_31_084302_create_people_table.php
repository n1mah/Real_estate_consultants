<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string("firstname");
            $table->string("lastname");
            $table->string("national_code");
            $table->string("birth_certificate_number");
            $table->timestamp("date_of_birth");
            $table->string("place_of_birth");
            $table->string("fathername");
            $table->longText("address");
            $table->string("postal_code");
            $table->string("mobile");
            $table->string("phone");
            $table->timestamps();
        });
        $data=[
            ["علی","علیزاده","3860921324","1332","644144365","همدان","مجید","همدان میدان جهاد خیابان طالقانی خیابان آرام جنوبی چهار راه امیرکبیر ساختمان مینا طبقه ۳ واحد ۵","6516211223","09183191122","08132562335"],
            ["محسن","محمدی راد","0026021664","0026021664","912513600","تهران","احمد","تهران منطقه ۳ زعفرانیه انتهای خیابان بهشت خیابان اصلی کریم خان تقاطع مجیدیه ساختمان ۵","6516211223","09183191122","0212562335"],
            ["شروین","آرتیمانی","3860921326","12","569965500","همدان","سعید","همدان میدان جهاد خیابان طالقانی خیابان آرام جنوبی چهار راه امیرکبیر ساختمان مینا طبقه ۳ واحد ۵","6516211223","09183191122","08132562335"],
            ["مهسا","زاکانی","3860921325","98142","1028949000","همدان","نیما","همدان میدان جهاد خیابان طالقانی خیابان آرام جنوبی چهار راه امیرکبیر ساختمان مینا طبقه ۳ واحد ۵","6516211223","09183191122","08132562335"],
            ["امیر رضا","مسعودی","3931235459","1","754308000","شهرکرد","علی","شهرکرد ...","6516211223","09305551652","03142562335"]
        ];
        for ($i = 0; $i < count($data); $i++) {
            DB::table('people')->insert(
                [
                    'firstname' => $data[$i][0],
                    'lastname' => $data[$i][1],
                    'national_code' => $data[$i][2],
                    'birth_certificate_number' => $data[$i][3],
                    'date_of_birth' => Carbon::createFromTimestamp($data[$i][4])->format("Y/m/d H:i:s"),
                    'place_of_birth' => $data[$i][5],
                    'fathername' => $data[$i][6],
                    'address' => $data[$i][7],
                    'postal_code' => $data[$i][8],
                    'mobile' =>  $data[$i][9],
                    'phone' =>  $data[$i][10],
                    'created_at' => Carbon::createFromTimestamp(time())->format("Y/m/d H:i:s"),
                    'updated_at' => Carbon::createFromTimestamp(time())->format("Y/m/d H:i:s"),

                ]
            );
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
