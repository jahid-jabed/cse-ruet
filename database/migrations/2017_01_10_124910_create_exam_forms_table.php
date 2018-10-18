<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('roll');
            $table->integer('reg');
            $table->String('session');
            $table->String('year');
            $table->String('semester');
            $table->String('c1n');
            $table->String('c1t');
            $table->float('c1c');
            $table->String('c2n');
            $table->String('c2t');
            $table->float('c2c');
            $table->String('c3n');
            $table->String('c3t');
            $table->float('c3c');
            $table->String('c4n');
            $table->String('c4t');
            $table->float('c4c');
            $table->String('c5n');
            $table->String('c5t');
            $table->float('c5c');
            $table->String('c6n');
            $table->String('c6t');
            $table->float('c6c');
            $table->String('c7n');
            $table->String('c7t');
            $table->float('c7c');
            $table->String('c8n');
            $table->String('c8t');
            $table->float('c8c');
            $table->String('c9n');
            $table->String('c9t');
            $table->float('c9c');
            $table->String('c0n');
            $table->String('c0t');
            $table->float('c0c');
            $table->String('receipt');
            $table->boolean('xm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_forms');
    }
}
