<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('qasts', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('qust');
            $table->string('ans1');
            $table->string('ans2');
            $table->string('ans3');
            $table->string('ans4')->nullable();
            $table->string('signal')->nullable();
            $table->integer('corectA');
            $table->string('audio')->nullable();

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
        //
        Schema::dropIfExists('qasts');
    }
}
