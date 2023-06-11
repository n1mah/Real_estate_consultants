<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('details_of_rentals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("lease_agreement_id"); //کد قرارداد اجاره
            $table->foreign("lease_agreement_id")->references("id")->on("lease_agreements")->onUpdate("cascade")->onDelete("cascade");
            $table->string('rental_period'); //مدت زمان اجاره
            $table->string('rental_period_type'); //نوع مورد اجاره //سال/ماه
            $table->timestamp('from')->nullable(); // اجاره از تاریخ
            $table->timestamp('until')->nullable(); // اجاره تا تاریخ
            $table->decimal("penalty_for_non_payment",30,0)->nullable();  //خسارت عدم وصول مبلغ (چک)
            $table->decimal("penalty_for_non_return",30,0)->nullable();  //خسارت عدم استرداد مبلغ ( به صورت روزانه )
            $table->timestamp('delivery_time')->nullable(); // زمان تحویل
            $table->decimal("penalty_for_non_delivery",30,0)->nullable();  //خسارت عدم تحویل (مورداجاره)
            $table->string('others'); //غیر
            $table->decimal("damages_for_non_fulfillment_of_obligations",30,0)->nullable();   //خسارت عدم انجام تعهدات مستاجر (تنفیذ مستاجر)
            $table->decimal("penalty_for_non_evacuation",30,0)->nullable();  //جریمه عدم تسلیم (مورداجاره) توسط مستاجر ( به صورت روزانه )
            $table->boolean("arbitration")->default(false); //پذیرش شرط داوری
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_of_rentals');
    }
};
