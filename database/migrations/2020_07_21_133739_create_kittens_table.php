<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKittensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kittens', function (Blueprint $table) {
            $table->id();
            $table->integer('breed_id');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('width');
            $table->integer('age');
            $table->string('fur');
            $table->string('color');
            $table->string('image')->default(env('APP_URL').'public/storage/default.png');
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
        Schema::dropIfExists('kittens');
    }
}
