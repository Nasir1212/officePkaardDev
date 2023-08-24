<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('otp_expired', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('otp')->nullable();
        //     $table->string('is_expired')->nullable();
        //     $table->string('create_at')->nullable();
           
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
