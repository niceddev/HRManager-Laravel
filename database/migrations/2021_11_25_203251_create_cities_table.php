<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });

        DB::table('cities')->insert([
            ['name' => 'Актобе'],
            ['name' => 'Актау'],
            ['name' => 'Атырау'],
            ['name' => 'Алматы'],
            ['name' => 'Кандыагаш'],
            ['name' => 'Караганда'],
            ['name' => 'Костанай'],
            ['name' => 'Нур-Султан'],
            ['name' => 'Павлодар'],
            ['name' => 'Петропавловск'],
            ['name' => 'Семей'],
            ['name' => 'Шымкент'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
