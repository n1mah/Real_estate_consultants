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
        Schema::create('lease_agreements', function (Blueprint $table) {
            $table->id();
            $table->string("file_number");
            $table->integer("level");
            $table->timestamp("confirm_date")->nullable();
            $table->timestamp("signature_date")->nullable();
            $table->integer("signature_hour")->nullable();
            $table->integer("signature_minutes")->nullable();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->foreign("user_id")->references("id")->on("users")->onUpdate("cascade")->onDelete("cascade");
            $table->text('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lease_agreements');
    }
};
