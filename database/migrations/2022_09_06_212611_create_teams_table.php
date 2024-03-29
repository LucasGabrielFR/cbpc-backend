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
        Schema::create('teams', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->nullable(false);
            $table->string('shortname');
            $table->string('fullname');
            $table->string('contact');
            $table->string('country');
            $table->integer('matches')->default(0);
            $table->integer('wins')->default(0);
            $table->integer('loses')->default(0);
            $table->integer('draws')->default(0);
            $table->integer('goals')->default(0);
            $table->integer('goals_conceded')->default(0);
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
        Schema::dropIfExists('teams');
    }
};
