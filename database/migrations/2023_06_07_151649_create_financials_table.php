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
        Schema::create('financials', function (Blueprint $table) {
            $table->id();
            $table->decimal("purchase_price",30,0);  //قیمت هر متر
            $table->decimal("deposit",30,0);  //قیمت هر متر
            $table->string("payment_type")->default('نقد'); //کدپستی
            $table->string("bank")->nullable(); //کدپستی
            $table->string("branch")->nullable(); //کدپستی
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financials');
    }
};
