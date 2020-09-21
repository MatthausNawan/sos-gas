<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('condominium_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('document');
            $table->string('register');
            $table->date('birth_date');
            $table->string('phone');
            $table->string('mobile_phone');
            $table->string('email')->unique();
            $table->string('zipcode');
            $table->string('address');
            $table->string('address_number');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->string('province');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
