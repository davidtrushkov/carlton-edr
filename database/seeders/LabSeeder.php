<?php

namespace Database\Seeders;

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
        try {
            \App\Models\Lab::factory()->times(200)->create();
        } catch(Exception $e) {

            if($this->failures > 5) {
                print_r("Seeder Error. Failure count for current entity: " . $this->failures);
                return;
            }
            
            $this->failures++;
            $this->run();
        }
    }
}
