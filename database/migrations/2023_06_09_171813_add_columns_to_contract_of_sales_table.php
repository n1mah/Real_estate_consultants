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
        Schema::table('contract_of_sales', function (Blueprint $table) {
            $table->timestamp("signature_date")->nullable();
            $table->timestamp("signature_hour")->nullable();
            $table->timestamp("signature_minutes")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contract_of_sales', function (Blueprint $table) {
            $table->dropColumn('signature_date');
            $table->dropColumn('signature_hour');
            $table->dropColumn('signature_minutes');
        });
    }
};
