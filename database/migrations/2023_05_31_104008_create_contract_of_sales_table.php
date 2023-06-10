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
        Schema::create('contract_of_sales', function (Blueprint $table) {
            $table->id();
            $table->string("file_number");
            $table->integer("level");
            $table->timestamp("confirm_date")->nullable();
            $table->timestamps();
        });
        $data=[
            ["133456-122","1685531870",'a'],
            ["133456-123","1590923870",'b'],
            ["133456-124","1433071070",'c'],
        ];
        for ($i = 0; $i < count($data); $i++) {
            DB::table('contract_of_sales')->insert(
                [
                    'level' => $data[$i][0],
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
        Schema::dropIfExists('contract_of_sales');
    }
};
