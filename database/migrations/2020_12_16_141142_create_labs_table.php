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
            $table->float('eff_ph')->nullable();
            $table->float('eff_cond')->nullable();
            $table->float('eff_cl2t')->nullable();
            $table->float('eff_nh4t')->nullable();
            $table->float('eff_turb')->nullable();
            $table->float('eff_po4')->nullable();
            $table->float('product_ph')->nullable();
            $table->float('product_cond')->nullable();
            $table->float('product_cl2t')->nullable();
            $table->float('product_nh4t')->nullable();
            $table->float('product_turb')->nullable();
            $table->float('product_po4')->nullable();
            $table->date('lab_date')->unique();
            $table->timestamps();
            // $table->float('pre_ph');
            // $table->float('pre_cond');
            // $table->float('pre_cl2t');
            // $table->float('pre_nh4t');
            // $table->float('pre_turb');

            // $table->float('post_ph');
            // $table->float('post_cond');
            // $table->float('post_cl2t');
            // $table->float('post_nh4t');
            // $table->float('post_turb');
            // $table->float('post_po4');
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
