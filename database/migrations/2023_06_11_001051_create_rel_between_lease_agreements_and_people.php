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
        Schema::create('rel_between_lease_agreements_and_people', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("lease_agreement_id");
            $table->foreign("lease_agreement_id")->references("id")->on("lease_agreements")->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger("person_id");
            $table->foreign("person_id")->references("id")->on("people")->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger("lawyer_id")->nullable();;
            $table->foreign("lawyer_id")->references("id")->on("people")->onUpdate("cascade")->onDelete("cascade");
            $table->boolean("is_tenant");
            $table->unique(['lease_agreement_id','person_id','is_tenant'],'my_unique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rel_between_lease_agreements_and_people');
    }
};
