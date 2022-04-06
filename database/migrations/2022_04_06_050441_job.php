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
        //
        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('caree_level');
            $table->string('governement');
            $table->date('start_date');
            $table->string('expirt_date');
            $table->string('description');
            $table->string('responsblite');
           
            $table->string('sector');
            $table->string('image')->default('person.png');
            $table->string('file');
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
    }
};
