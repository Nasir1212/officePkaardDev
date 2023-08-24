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
        // Schema::create('aff_sub_discount_product', function (Blueprint $table) {
        //     $table->id(); 
        //     $table->string('affiliation_product_id')->nullable();    
        //     $table->text('details')->nullable();    
        //     $table->string('title')->nullable();
        //     $table->string('img_path')->nullable();
        //     $table->string('privilege')->nullable();
        //     $table->date('create_at')->nullable();
        //     $table->string('regular_price')->nullable();
        //     $table->string('product_uploader')->default('1');
        //     $table->string('status')->default('1');
            
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
