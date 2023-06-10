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
        Schema::create('rental_property_details', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger("lease_agreement_id"); //کد قرارداد اجاره
            $table->foreign("lease_agreement_id")->references("id")->on("lease_agreements")->onUpdate("cascade")->onDelete("cascade");
            $table->string("entirety")->default('شش');  // تملیک منافع
            $table->string("type_of_lease")->default('دانگ');  // نوع مورد اجاره
            $table->longText("address")->nullable(); //ادرس
            $table->string("house_number")->nullable(); //پلاک ثبتی
            $table->string("sub_part_address")->nullable(); //فرعی
            $table->string("main_part_address")->nullable(); //اصلی
            $table->string("part")->nullable(); //بخش
            $table->float("house_area"); //مساحت-متراژ
            $table->string("title_deeds_number")->nullable(); //سند مالکیت به شماره سریال
            $table->string("name")->nullable(); //به نام
            $table->integer("bedroom")->nullable(); //به نام
            $table->json("membership_right")->nullable();  //حق اشتراک
            $table->string("parking")->nullable();  //پارکینگ
            $table->string("warehouse")->nullable(); //انباری
            $table->string("telephone")->nullable(); //تلفن
            $table->string("postal_code")->nullable(); //کدپستی

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_property_details');
    }
};
