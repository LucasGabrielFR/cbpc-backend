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
        Schema::create('player_contracts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('team_id')->nullable(false);
            $table->uuid('player_id')->nullable(false);
            $table->date('start_date');
            $table->date('end_date')->nullable(true);
            $table->integer('situation')->nullable(false);
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
        Schema::dropIfExists('player_contracts');
    }
};
