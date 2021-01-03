<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->float('eff_ph');
            $table->float('eff_cond');
            $table->float('eff_cl2t');
            $table->float('eff_cl2f');
            $table->float('eff_nh4t');
            $table->float('eff_nh4f');
            $table->float('eff_turb');
            $table->float('eff_po4');
            $table->date('lab_date')->unique();
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
        Schema::dropIfExists('labs');
    }
}
