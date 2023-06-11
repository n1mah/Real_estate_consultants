<?php

use Carbon\Carbon;
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
            $table->text('comment')->nullable();
            $table->timestamps();
        });
        $data=[
            ["22256-122","1611531870",'a'],
            ["22256-123","1590999870",'b'],
            ["22256-124","1463071070",'c'],
        ];
        for ($i = 0; $i < count($data); $i++) {
            DB::table('lease_agreements')->insert(
                [
                    'level' => 0,
                    'file_number' => $data[$i][0],
                    'confirm_date' => Carbon::createFromTimestamp($data[$i][1])->format("Y/m/d H:i:s"),
                    'created_at' => Carbon::createFromTimestamp(time())->format("Y/m/d H:i:s"),
                    'updated_at' => Carbon::createFromTimestamp(time())->format("Y/m/d H:i:s"),
                ]
            );
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lease_agreements');
    }
};
