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
        Schema::table('financials', function (Blueprint $table) {
            $table->string("city")->nullable(); //شهرستان
            $table->decimal("wage",30,0)->nullable();  //حق الزحمه مشاور املاک در شهرستان
            $table->decimal("amount_received_each",30,0)->nullable();  //مبلغ دریافتی از هر طرف
            $table->integer("tax")->nullable();  //درصد مالیات بر ارزش افزوده
            $table->decimal("total_received",30,0)->nullable();  //مجموع دریافتی
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('financials', function (Blueprint $table) {
            $table->dropColumn('city');
            $table->dropColumn('wage');
            $table->dropColumn('amount_received_each');
            $table->dropColumn('tax');
            $table->dropColumn('total_received');
        });
    }
};
