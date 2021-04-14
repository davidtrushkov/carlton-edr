<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Database\Seeder;

class LabSeeder extends Seeder
{

    private $failures = 0;


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('labs')->insert([
        //     'user_id' => 1,
        //     'eff_ph' => 7.78,
        //     'eff_cond' => 481,
        //     'eff_cl2t' => 5.7,
        //     'eff_cl2f' => 0,
        //     'eff_nh4t' =>  1.15,
        //     'eff_nh4f' => 0,
        //     'eff_turb' => .08,
        //     'eff_po4' => 2.06,
        //     'product_ph' => 7.78,
        //     'product_cond' => 481,
        //     'product_cl2t' => 5.7,
        //     'product_cl2f' => 0,
        //     'product_nh4t' =>  1.15,
        //     'product_turb' => .08,
        //     'product_po4' => 0,
        //     'lab_date' => Carbon::parse('2021-01-01'),
        //     'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        // DB::table('labs')->insert([
        //     'user_id' => 1,
        //     'eff_ph' => NULL,
        //     'eff_cond' => NULL,
        //     'eff_cl2t' => NULL,
        //     'eff_cl2f' => NULL,
        //     'eff_nh4t' =>  NULL,
        //     'eff_nh4f' => NULL,
        //     'eff_turb' => NULL,
        //     'eff_po4' => NULL,
        //     'product_ph' => NULL,
        //     'product_cond' => NULL,
        //     'product_cl2t' => NULL,
        //     'product_cl2f' => NULL,
        //     'product_nh4t' =>  NULL,
        //     'product_turb' => NULL,
        //     'product_po4' => NULL,
        //     'lab_date' => Carbon::parse('2021-01-04'),
        //     'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        // DB::table('labs')->insert([
        //     'user_id' => 1,
        //     'eff_ph' => NULL,
        //     'eff_cond' => NULL,
        //     'eff_cl2t' => NULL,
        //     'eff_cl2f' => NULL,
        //     'eff_nh4t' =>  NULL,
        //     'eff_nh4f' => NULL,
        //     'eff_turb' => NULL,
        //     'eff_po4' => NULL,
        //     'product_ph' => NULL,
        //     'product_cond' => NULL,
        //     'product_cl2t' => NULL,
        //     'product_cl2f' => NULL,
        //     'product_nh4t' =>  NULL,
        //     'product_turb' => NULL,
        //     'product_po4' => NULL,
        //     'lab_date' => Carbon::parse('2021-01-04'),
        //     'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        // try {
        //     \App\Models\Lab::factory()->times(200)->create();
        // } catch(Exception $e) {

        //     if($this->failures > 5) {
        //         print_r("Seeder Error. Failure count for current entity: " . $this->failures);
        //         return;
        //     }
            
        //     $this->failures++;
        //     $this->run();
        // }
    }
}
