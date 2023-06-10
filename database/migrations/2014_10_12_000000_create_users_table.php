<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('membership_number');
            $table->string('manager');
            $table->text('address');
            $table->string('state');
            $table->string('city');
            $table->integer('default_tax');
            $table->decimal("default_wage",30,2)->nullable();
//            $table->timestamp('email_verified_at')->nullable();
//            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert(
            [
                'username' => 'admin',
                'password' => 'admin',
                'membership_number' => '123-213sa213',
                'manager' => 'علی علیزاده اصلی مازندرانی',
                'address' => 'همدان میدان جهاد خیابان طالقانی خیابان آرام جنوبی چهار راه امیرکبیر ساختمان مینا طبقه ۳ واحد ۵',
                'state' =>'همدان',
                'city' => 'همدان',
                'default_tax' => '140000',
                'default_wage' => 9
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
