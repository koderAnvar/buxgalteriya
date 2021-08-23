<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bux', function (Blueprint $table) {
           
            $table->id();
            // $table->json('type');
            $table->string('type');
            $table->string('category');
            $table->timestamps();
            $table->string('sum');
            // $table->string('total');
            $table->string('comment');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bux');
    }
}
