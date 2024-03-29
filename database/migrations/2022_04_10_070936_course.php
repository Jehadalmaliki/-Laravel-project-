<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations..
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Company');
            $table->string('Description');
            $table->string('Year');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('course');
    }
};
