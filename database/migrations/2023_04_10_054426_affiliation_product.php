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
        Schema::create('affiliation_product', function (Blueprint $table) {
            $table->id(); 
            $table->string('address')->nullable();
            $table->string('category_id')->nullable();
            $table->string('company_id')->nullable();
            $table->string('details')->nullable();    
            $table->string('discount')->nullable();
            $table->string('district_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('title')->nullable();
            $table->string('img_path')->nullable();
            $table->string('privilege')->nullable();
            $table->date('create_at')->nullable();
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
