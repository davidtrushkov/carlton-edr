<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class WellSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('wells')->insert([
            'well_id' => 21,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(440, 520),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 22,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(800, 1100),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 23,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(1500, 1650),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 24,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(800, 1200),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 25,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(800, 1100),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 26,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(1800, 2000),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 27,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(1700, 1900),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 29,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(1400, 1600),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 30,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(950, 2100),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 31,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(1100, 1300),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 32,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(1110, 1899),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 33,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(1800, 2100),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 38,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(900, 1200),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 39,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(800, 1500),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 59,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(1700, 2360),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 60,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(2000, 2400),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->startOfMonth()->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->startOfMonth()->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);



        // Well 21 Other monthly samples

        DB::table('wells')->insert([
            'well_id' => 21,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(440, 520),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->subMonths(2)->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->subMonths(2)->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 21,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(440, 520),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->subMonths(3)->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->subMonths(3)->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 21,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(440, 520),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->subMonths(4)->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->subMonths(4)->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 21,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(440, 520),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->subMonths(5)->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->subMonths(5)->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 21,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(440, 520),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->subMonths(6)->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->subMonths(6)->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 21,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(440, 520),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->subMonths(7)->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->subMonths(7)->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 21,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(440, 520),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->subMonths(8)->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->subMonths(8)->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('wells')->insert([
            'well_id' => 21,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(440, 520),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->subMonths(9)->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->subMonths(9)->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 21,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(440, 520),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->subMonths(10)->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->subMonths(10)->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('wells')->insert([
            'well_id' => 21,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(440, 520),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->subMonths(11)->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->subMonths(11)->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 21,
            'temp' => $faker->randomFloat(2, 23, 29),
            'ph' => $faker->randomFloat(2, 7.6, 8.0),
            'do' => $faker->randomFloat(2, 0.08, 0.20),
            'cond' =>  $faker->numberBetween(440, 520),
            'ntu' => $faker->randomFloat(2, .04, .15),
            'grab_time' => \Carbon\Carbon::now()->subMonths(12)->addHours(8)->format('H:i'),
            'date' =>  \Carbon\Carbon::now()->subMonths(12)->format('Y-m-d H:i:s'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
