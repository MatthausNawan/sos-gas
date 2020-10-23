<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToContractsTable extends Migration
{
    public function up()
    {
        Schema::table('contracts', function (Blueprint $table) {
            $table->unsignedInteger('condominium_id')->nullable();
            $table->foreign('condominium_id', 'condominium_fk_2350837')->references('id')->on('condominia');
        });
    }
}
