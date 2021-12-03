<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });

        DB::table('specialities')->insert([
            ['name' => 'Администратор'],
            ['name' => 'Водитель'],
            ['name' => 'Курьер'],
            ['name' => 'Секретарь'],
            ['name' => 'Ресепшен'],
            ['name' => 'Уборщица/уборщик'],
            ['name' => 'Аналитик'],
            ['name' => 'Бухгалтер'],
            ['name' => 'Библиотекарь'],
            ['name' => 'Адвокат'],
            ['name' => 'Репетитор'],
            ['name' => 'Инженер'],
            ['name' => 'Маркетолог'],
            ['name' => 'Продюсер'],
            ['name' => 'Журналист'],
            ['name' => 'Фотограф'],
            ['name' => 'Дизайнер'],
            ['name' => 'Верстальщик'],
            ['name' => 'Программист 1С'],
            ['name' => 'Fullstack программист'],
            ['name' => 'Backend программист'],
            ['name' => 'Frontend программист'],
            ['name' => 'Копирайтер'],
            ['name' => 'Консультант'],
            ['name' => 'Промоутер'],
            ['name' => 'Ветеренар'],
            ['name' => 'SMM'],
            ['name' => 'Психолог'],
            ['name' => 'Строитель'],
            ['name' => 'Модель'],
            ['name' => 'Массажист'],
            ['name' => 'Косметолог'],
            ['name' => 'Агент'],
            ['name' => 'Хакер'],
            ['name' => 'Официант'],
            ['name' => 'Шеф-повар'],
            ['name' => 'Юрист'],
            ['name' => 'Швейцар'],
            ['name' => 'Ревизор'],
            ['name' => 'Детектив'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialities');
    }
}

