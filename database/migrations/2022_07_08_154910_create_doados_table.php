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
        Schema::create('doados', function (Blueprint $table) {
            $table->id();
            $table->string('name_pet');
            $table->string('specie');
            $table->string('subspecie');
            $table->string('color');
            $table->string('size');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('doados_user_id_foreign');

        Schema::dropIfExists('doados');
    }
};
