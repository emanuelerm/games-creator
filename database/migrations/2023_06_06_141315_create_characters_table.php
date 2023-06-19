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
            $table->bigIncrements('id');
            $table->string('name')->nullable(false)->unique();
            $table->string('subname')->nullable(true)->unique();
            $table->string('slug')->unique();
            $table->string('derivation')->nullable(false);
            $table->text('description', 700)->nullable(false);
            $table->string('role')->nullable(false);
            $table->string('difficoultly')->nullable(false);
            $table->string('image')->nullable(false)->unique();
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
        Schema::dropIfExists('characters');
    }
};
