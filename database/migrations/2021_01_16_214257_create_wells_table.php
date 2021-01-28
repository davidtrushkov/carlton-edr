<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wells', function (Blueprint $table) {
            $table->id();
            $table->string('well_id');
            $table->boolean('service')->default(0);
            $table->float('temp')->nullable();
            $table->float('ph')->nullable();
            $table->float('do')->nullable();
            $table->float('cond')->nullable();
            $table->float('ntu')->nullable();
            $table->string('grab_time')->nullable();
            $table->timestamp('date')->nullable();
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
        Schema::dropIfExists('wells');
    }
}
