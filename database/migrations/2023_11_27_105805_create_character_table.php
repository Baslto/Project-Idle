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
        Schema::create('characters', function (Blueprint $table) {
            $table->bigInteger('userid');
            $table->bigInteger('characterid');
            $table->string('name')->unique();
            $table->string('characterClass');
            $table->bigInteger('maxHealth');
            $table->bigInteger('damage');
            $table->bigInteger('defense');
            $table->bigInteger('Level');
            $table->bigInteger('currentEXP');
            $table->bigInteger('requiredEXP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_tabel');
    }
};
