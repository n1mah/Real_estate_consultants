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
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("contract_of_sale_id"); //کد قرارداد فروش
            $table->foreign("contract_of_sale_id")->references("id")->on("contract_of_sales")->onUpdate("cascade")->onDelete("cascade");
            $table->string("entirety")->default('شش');  // دانگ
            $table->string("arena_and_nobles")->nullable(); //عرصه و اعیان
            $table->string("house_number")->nullable(); //پلاک ثبتی
            $table->string("sub_part_address")->nullable(); //فرعی
            $table->string("main_part_address")->nullable(); //اصلی
            $table->integer("year_of_construction"); //سال ساخت
            $table->string("part")->nullable(); //بخش
            $table->string("registration_area")->nullable(); //حوزه ثبتی
            $table->float("house_area"); //مساحت-متراژ
            $table->decimal("price_per_meter",22,0);  //قیمت هر متر
            $table->string("parking")->nullable();  //پارکینگ
            $table->string("warehouse")->nullable(); //انباری
            $table->json("membership_right")->nullable();  //حق اشتراک
            $table->string("telephone")->nullable(); //تلفن
            $table->boolean("title_deeds")->default(false); //دارا یا فاقد سند ثبتی
            $table->string("title_deeds_number")->nullable(); //شماره سند ثبتی
            $table->longText("address")->nullable(); //ادرس
            $table->string("postal_code")->nullable(); //کدپستی
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_details');
    }
};
