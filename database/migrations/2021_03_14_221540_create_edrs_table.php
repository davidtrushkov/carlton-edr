<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edrs', function (Blueprint $table) {
            $table->id();
            $table->integer('edr_id');
            $table->string('polarity');
            $table->integer('run_hours');
            $table->float('feed_cl2');
            $table->float('feed_ph');
            $table->float('feed_temp');
            $table->float('feed_cond');
            $table->float('product_cond');
            $table->float('concen_cond');
            $table->float('electrode_inlet_ph');
            $table->float('post_cart_psi');
            $table->float('stack_inlet_psi');
            $table->float('inlet_press_dif');
            $table->float('outlet_press_dif');
            $table->float('dil_stack_outlet_psi');
            $table->float('conc_stack_inlet_psi');
            $table->float('feed_inlet_flow');
            $table->float('dil_outlet_flow');
            $table->float('cbd_flow');
            $table->float('conc_pump_kw');
            $table->float('conc_pump_speed');
            $table->float('feed_valve_pos');
            $table->float('electrode_dosage');
            $table->float('antiscalant_dosage');
            $table->float('osp_time');
            $table->date('date')->nullable();
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
        Schema::dropIfExists('edrs');
    }
}
