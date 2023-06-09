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
        Schema::create('details_of_contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("contract_of_sale_id"); //کد قرارداد فروش
            $table->foreign("contract_of_sale_id")->references("id")->on("contract_of_sales")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamp('set_time'); // زمان موقر برای حضور
            $table->string('notary_public'); //دفتراسنادرسمی
            $table->timestamp('delivery_time')->nullable(); // زمان تحویل
            $table->decimal("loss_of_no_sale",30,0)->nullable();  //خسارت عدم فروش (مشکل فروش) به خریدار
            $table->decimal("damages_for_non_fulfillment_of_obligations",30,0)->nullable();  //خسارت عدم انجام تعهدات  (به خریدار)
            $table->string('contract_costs')->nullable(); //هزینه های قرارداد
            $table->decimal("seller_delayed_payment_fine",30,0)->nullable();  //جریمه تاخیر پرداخت فروشنده
            $table->decimal("buyer_delayed_payment_fine",30,0)->nullable();  //جریمه تاخیر پرداخت خریدار
            $table->boolean("arbitration")->default(false); //پذیرش شرط داوری
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_of_contracts');
    }
};
