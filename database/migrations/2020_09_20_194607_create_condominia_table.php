<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCondominiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condominia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('condominia')->insert([
            [
                'name' => 'Alta Vista',
            ],
            [
                'name' => 'Altiprada',
            ],
            [
                'name' => 'Aspen',
            ],
            [
                'name' => 'Casa Blanca',
            ],
            [
                'name' => 'Colorado',
            ],
            [
                'name' => 'Costa Rica I',
            ],
            [
                'name' => 'Costa Rica II',
            ],
            [
                'name' => 'Idalatuba',
            ],
            [
                'name' => 'Maria José',
            ],
            [
                'name' => 'Mozart',
            ],
            [
                'name' => 'Nisia Floresta',
            ],
            [
                'name' => 'Terraço dos Ventos',
            ],
            [
                'name' => 'Vera Cruz',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condominia');
    }
}
