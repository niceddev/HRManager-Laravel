<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });

        DB::table('skills')->insert(
            [
                ['name' => 'Креативность'],
                ['name' => 'Лидерство'],
                ['name' => 'Коммуникабельность'],
                ['name' => 'Умение работать в команде'],
                ['name' => 'UX/UI Дизайн'],
                ['name' => 'JavaScript'],
                ['name' => 'HTML'],
                ['name' => 'CSS'],
                ['name' => 'PHP'],
                ['name' => 'Java'],
                ['name' => 'Python'],
                ['name' => 'C++'],
                ['name' => 'C#'],
                ['name' => 'Tailwindcss'],
                ['name' => 'Bootstrap'],
                ['name' => 'JQuery'],
                ['name' => 'Laravel'],
                ['name' => 'NodeJS'],
                ['name' => 'Jango'],
                ['name' => 'MySQL'],
                ['name' => 'PostgreSQL'],
                ['name' => 'MongoDB'],
                ['name' => 'Nginx'],
                ['name' => 'Photoshop'],
                ['name' => 'Illustrator'],
                ['name' => 'Premiere Pro'],
                ['name' => 'Иностранные языки'],
                ['name' => '1С'],
                ['name' => 'Microsoft Office'],
                ['name' => 'Деловая переписка'],
                ['name' => 'Ajax'],
                ['name' => 'Грамотная речь'],
                ['name' => 'Пунктуальность'],
                ['name' => 'Ответственность'],
                ['name' => 'Пользователь ПК'],
                ['name' => 'Консультирование'],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
    }
}
