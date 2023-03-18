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
        Schema::create('withdraw_payment', function (Blueprint $table) {
            $table->id();
            $table->string('tranjection_type')->nullable();
            $table->string('tranjection_name')->nullable();
            $table->string('tranjection_number')->nullable();
            $table->string('mfs_type')->nullable();
            $table->string('amount')->nullable();
            $table->string('requested_date')->nullable();
            $table->string('paied_date')->nullable();
            $table->string('requester_refe')->nullable();
            $table->string('status')->default('1');
           
        });
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
