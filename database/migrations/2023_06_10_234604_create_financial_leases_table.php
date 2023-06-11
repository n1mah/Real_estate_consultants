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
        Schema::create('financial_leases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("lease_agreement_id")->unique(); //کد قرارداد اجاره
            $table->foreign("lease_agreement_id")->references("id")->on("lease_agreements")->onUpdate("cascade")->onDelete("cascade");
            $table->decimal("lease_amount",30,0);  //مبلغ جمعا اجاره نامه
            $table->decimal("monthly_rental_amount",30,0);  //مبلغ اجاره نامه ماهیانه
            $table->boolean("at_first")->default(false); //در ابتدا ؟ (زمان پرداخت - ابتدای ماه یا انتهای ماه)
            $table->decimal("mortgage",30,0);  //رهن
            $table->decimal("rent",30,0);  //مبلغ پرداخت//بیعانه
            $table->string("payment_type")->default('نقد'); //نوه پرداخت - چک یا نقد
            $table->string("bank")->nullable(); //بانک
            $table->string("branch")->nullable(); //شعبه
            $table->string("cheque")->nullable(); //چک
            $table->decimal("deposit",30,0);  //باقیمانده مبلغ رهن
            $table->timestamp("deposit_return_date")->nullable(); //زمان پرداخت باقیمانده رهن
            $table->string("city")->nullable(); //شهرستان
            $table->decimal("wage",30,0)->nullable();  //حق الزحمه مشاور املاک در شهرستان
            $table->decimal("amount_received_each",30,0)->nullable();  //مبلغ دریافتی از هر طرف
            $table->integer("tax")->nullable();  //درصد مالیات بر ارزش افزوده
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financial_leases');
    }
};
