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
        // Schema::create('affiliation_partner', function (Blueprint $table) {
        //     $table->id(); 
        //     $table->string('back_nid')->nullable();
        //     $table->string('company_address')->nullable();
        //     $table->string('company_name')->nullable();
        //     $table->string('company_owner_name')->nullable();
        //     $table->string('company_tin')->nullable();            
        //     $table->string('contact_full_name')->nullable();
        //     $table->string('contact_number')->nullable()->unique();
        //     $table->string('contact_role')->nullable();
        //     $table->string('email_address')->nullable()->unique();
        //     $table->string('front_nid')->nullable();
        //     $table->string('password')->nullable();
        //     $table->date('create_at')->nullable();
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
