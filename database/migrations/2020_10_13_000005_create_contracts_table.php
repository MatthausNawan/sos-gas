<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('ssn');
            $table->string('register');
            $table->date('birth_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_number')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('address_complement')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
