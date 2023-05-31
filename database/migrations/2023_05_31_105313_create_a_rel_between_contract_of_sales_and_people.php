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
        Schema::create('contract_of_sales_people', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("contract_of_sale_id");
            $table->foreign("contract_of_sale_id")->references("id")->on("contract_of_sales")->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger("person_id");
            $table->foreign("person_id")->references("id")->on("people")->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger("lawyer_id")->nullable();;
            $table->foreign("lawyer_id")->references("id")->on("people")->onUpdate("cascade")->onDelete("cascade");
            $table->unique(['contract_of_sale_id','person_id']);
            $table->boolean("is_buyer");
            $table->timestamps();
        });
        $data=[
            [1,1,true,null],
            [1,2,false,null],
            [2,3,false,null],
            [2,4,true,5],
        ];
        for ($i = 0; $i < count($data); $i++) {
            DB::table('contract_of_sales_people')->insert(
                [
                    'contract_of_sale_id' => $data[$i][0],
                    'person_id' =>  $data[$i][1],
                    'is_buyer' =>  $data[$i][2],
                    'lawyer_id' =>  $data[$i][3],
                ]
            );
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract_of_sales_people');
    }
};
