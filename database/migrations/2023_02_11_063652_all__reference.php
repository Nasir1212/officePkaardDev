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
        // Schema::create('all_reference', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('reference_code')->unique();
        //     $table->string('status')->default('1');
        //     $table->string('wallet')->nullable();  
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
