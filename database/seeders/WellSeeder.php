<?php

namespace Database\Seeders;

use Carbon\Carbon;
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

        // DATE:: 12/08/2020

        DB::table('wells')->insert([
            'well_id' => 21,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' =>  NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 22,
            'service' => 0,
            'temp' => 28.4,
            'ph' => 7.04,
            'do' => .10,
            'cond' =>  2530,
            'ntu' => .03,
            'grab_time' => '08:55',
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 23,
            'service' => 0,
            'temp' => 29.6,
            'ph' => 6.99,
            'do' => .10,
            'cond' =>  3090,
            'ntu' => .08,
            'grab_time' => '08:32',
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 24,
            'service' => 0,
            'temp' => 27.7,
            'ph' => 7.11,
            'do' => .16,
            'cond' =>  1792,
            'ntu' => .59,
            'grab_time' => '08:15',
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 25,
            'service' => 0,
            'temp' => 28.3,
            'ph' => 7.13,
            'do' => .13,
            'cond' =>  1747,
            'ntu' => .05,
            'grab_time' => '10:06',
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 26,
            'service' => 0,
            'temp' => 26.7,
            'ph' => 7.16,
            'do' => .10,
            'cond' =>  2430,
            'ntu' => .07,
            'grab_time' => '10:28',
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 27,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' =>  NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 29,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' =>  NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 30,
            'service' => 0,
            'temp' => 25.5,
            'ph' => 7.21,
            'do' => .07,
            'cond' =>  2290,
            'ntu' => .06,
            'grab_time' => '11:30',
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 31,
            'service' => 0,
            'temp' => 26.2,
            'ph' => 7.18,
            'do' => .10,
            'cond' =>  2012,
            'ntu' => .08,
            'grab_time' => '10:48',
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 32,
            'service' => 0,
            'temp' => 29.4,
            'ph' => 7.06,
            'do' => .09,
            'cond' => 2850,
            'ntu' => .06,
            'grab_time' => '11:08',
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 33,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' =>  NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 38,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' =>  NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 39,
            'service' => 0,
            'temp' => 28.2,
            'ph' => 7.14,
            'do' => .09,
            'cond' => 1857,
            'ntu' => .05,
            'grab_time' => '11:48',
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 59,
            'service' => 0,
            'temp' => 28.6,
            'ph' => 7.08,
            'do' => .09,
            'cond' => 1951,
            'ntu' => .05,
            'grab_time' => '09:42',
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 60,
            'service' => 0,
            'temp' => 26.1,
            'ph' => 7.15,
            'do' => .12,
            'cond' =>  1686,
            'ntu' => .08,
            'grab_time' => '09:15',
            'date' => Carbon::parse('2020-12-08'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);





        // DATE:: 01/04/2021

        DB::table('wells')->insert([
            'well_id' => 21,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' =>  NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 22,
            'service' => 0,
            'temp' => 28.1,
            'ph' => 7.04,
            'do' => .11,
            'cond' =>  2540,
            'ntu' => .04,
            'grab_time' => '09:29',
            'date' =>  Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 23,
            'service' => 0,
            'temp' => 29.8,
            'ph' => 6.98,
            'do' => .11,
            'cond' =>  3100,
            'ntu' => .07,
            'grab_time' => '09:09',
            'date' =>  Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 24,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' =>  NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 25,
            'service' => 0,
            'temp' => 28.3,
            'ph' => 7.12,
            'do' => .07,
            'cond' =>  1756,
            'ntu' => .05,
            'grab_time' => '09:55',
            'date' => Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 26,
            'service' => 0,
            'temp' => 27.2,
            'ph' => 7.13,
            'do' => .09,
            'cond' =>  2530,
            'ntu' => .06,
            'grab_time' => '1030',
            'date' => Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 27,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' =>  NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 29,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' =>  NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 30,
            'service' => 0,
            'temp' => 25.7,
            'ph' => 7.21,
            'do' => .09,
            'cond' =>  2300,
            'ntu' => .09,
            'grab_time' => '11:56',
            'date' => Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 31,
            'service' => 0,
            'temp' => 28.2,
            'ph' => 7.17,
            'do' => .10,
            'cond' =>  2075,
            'ntu' => .44,
            'grab_time' => '10:55',
            'date' => Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 32,
            'service' => 0,
            'temp' => 29.5,
            'ph' => 7.06,
            'do' => .13,
            'cond' => 2870,
            'ntu' => .06,
            'grab_time' => '11:24',
            'date' => Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 33,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' =>  NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 38,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' =>  NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 39,
            'service' => 0,
            'temp' => 28.2,
            'ph' => 7.13,
            'do' => .11,
            'cond' => 1867,
            'ntu' => .06,
            'grab_time' => '11:22',
            'date' => Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 59,
            'service' => 0,
            'temp' => 28.5,
            'ph' => 7.08,
            'do' => .12,
            'cond' => 1982,
            'ntu' => .05,
            'grab_time' => '08:36',
            'date' => Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 60,
            'service' => 0,
            'temp' => 26.1,
            'ph' => 7.15,
            'do' => .09,
            'cond' =>  1711,
            'ntu' => .25,
            'grab_time' => '08:14',
            'date' => Carbon::parse('2021-01-04'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
       












        // DATE:: 02/01/2021
        
        DB::table('wells')->insert([
            'well_id' => 21,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 22,
            'service' => 0,
            'temp' => 29.1,
            'ph' => 7.04,
            'do' => .13,
            'cond' => 2580,
            'ntu' => .05,
            'grab_time' => '08:31',
            'date' => Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 23,
            'service' => 0,
            'temp' => 29.7,
            'ph' => 6.99,
            'do' => .11,
            'cond' =>  3160,
            'ntu' => .06,
            'grab_time' => '08:11',
            'date' =>   Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 24,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' =>  NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' =>   Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 25,
            'service' => 0,
            'temp' => 28.3,
            'ph' => 7.14,
            'do' => .07,
            'cond' => 1790,
            'ntu' => .04,
            'grab_time' => '10;22',
            'date' => Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 26,
            'service' => 0,
            'temp' => 27.1,
            'ph' => 7.13,
            'do' => .11,
            'cond' => 2560,
            'ntu' => .11,
            'grab_time' => '11:53',
            'date' => Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 27,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 29,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 30,
            'service' => 0,
            'temp' => 25.6,
            'ph' => 7.22,
            'do' => .09,
            'cond' => 2310,
            'ntu' => .09,
            'grab_time' => '01:23',
            'date' => Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 31,
            'service' => 0,
            'temp' => 26.2,
            'ph' => 7.19,
            'do' => .14,
            'cond' => 2094,
            'ntu' => .10,
            'grab_time' => '12:39',
            'date' => Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 32,
            'service' => 0,
            'temp' => 29.3,
            'ph' => 7.06,
            'do' => .11,
            'cond' => 2900,
            'ntu' => .07,
            'grab_time' => '12:18',
            'date' => Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 33,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 38,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 39,
            'service' => 0,
            'temp' => 28.1,
            'ph' => 7.14,
            'do' => .10,
            'cond' =>  1861,
            'ntu' => .07,
            'grab_time' => '01:40',
            'date' => Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 59,
            'service' => 0,
            'temp' => 28.3,
            'ph' => 7.09,
            'do' => .08,
            'cond' => 2043,
            'ntu' => .08,
            'grab_time' => '09:24',
            'date' => Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 60,
            'service' => 0,
            'temp' => 26.0,
            'ph' => 7.15,
            'do' => .09,
            'cond' => 1767,
            'ntu' => .21,
            'grab_time' => '08:51',
            'date' => Carbon::parse('2021-02-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        





         // DATE:: 03/01/2021
        
         DB::table('wells')->insert([
            'well_id' => 21,
            'service' => 0,
            'temp' => 28.3,
            'ph' => 7.17,
            'do' => .10,
            'cond' => 1748,
            'ntu' => .08,
            'grab_time' => '12:28',
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 22,
            'service' => 0,
            'temp' => 29.5,
            'ph' => 7.08,
            'do' => .10,
            'cond' => 2640,
            'ntu' => .05,
            'grab_time' => '01:13',
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 23,
            'service' => 0,
            'temp' => 29.9,
            'ph' => 7.05,
            'do' => .08,
            'cond' => 3180,
            'ntu' => .07,
            'grab_time' => '01:55',
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 24,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 25,
            'service' => 0,
            'temp' => 28.4,
            'ph' => 7.15,
            'do' => .10,
            'cond' => 1782,
            'ntu' => .06,
            'grab_time' => '10:50',
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 26,
            'service' => 0,
            'temp' => 27.3,
            'ph' => 7.15,
            'do' => .10,
            'cond' => 2590,
            'ntu' => .06,
            'grab_time' => '10:32',
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 27,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 29,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 30,
            'service' => 0,
            'temp' => 25.8,
            'ph' => 7.22,
            'do' => .12,
            'cond' => 2350,
            'ntu' => .06,
            'grab_time' => '08:55',
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 31,
            'service' => 0,
            'temp' => 26.3,
            'ph' => 7.20,
            'do' => .11,
            'cond' => 2091,
            'ntu' => .07,
            'grab_time' => '10:00',
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 32,
            'service' => 0,
            'temp' => 29.5,
            'ph' => 7.07,
            'do' => .10,
            'cond' => 2930,
            'ntu' => .08,
            'grab_time' => '09:20',
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 33,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 38,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 39,
            'service' => 0,
            'temp' => 28.4,
            'ph' => 7.12,
            'do' => .11,
            'cond' => 1870,
            'ntu' => .10,
            'grab_time' => '08:34',
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 59,
            'service' => 0,
            'temp' => 28.4,
            'ph' => 7.13,
            'do' => .10,
            'cond' => 2077,
            'ntu' => .14,
            'grab_time' => '12:55',
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 60,
            'service' => 0,
            'temp' => 26.3,
            'ph' => 7.20,
            'do' => .13,
            'cond' => 1753,
            'ntu' => .26,
            'grab_time' => '01:35',
            'date' => Carbon::parse('2021-03-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);




        // DATE:: 04/01/2021
        
        DB::table('wells')->insert([
            'well_id' => 21,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 22,
            'service' => 0,
            'temp' => 29.6,
            'ph' => 7.09,
            'do' => .09,
            'cond' => 2646,
            'ntu' => .05,
            'grab_time' => '12:45',
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 23,
            'service' => 0,
            'temp' => 29.6,
            'ph' => 7.07,
            'do' => .09,
            'cond' => 2980,
            'ntu' => .04,
            'grab_time' => '01:30',
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 24,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 25,
            'service' => 0,
            'temp' => 28.4,
            'ph' => 7.17,
            'do' => .18,
            'cond' => 1853,
            'ntu' => .07,
            'grab_time' => '11:55',
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 26,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 27,
            'service' => 0,
            'temp' => 26.6,
            'ph' => 7.29,
            'do' => .11,
            'cond' => 1550,
            'ntu' => .17,
            'grab_time' => '11:20',
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 29,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 30,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 31,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 32,
            'service' => 0,
            'temp' => 29.3,
            'ph' => 7.10,
            'do' => .11,
            'cond' => 2840,
            'ntu' => .05,
            'grab_time' => '10:15',
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 33,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 38,
            'service' => 1,
            'temp' => NULL,
            'ph' => NULL,
            'do' => NULL,
            'cond' => NULL,
            'ntu' => NULL,
            'grab_time' => NULL,
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 39,
            'service' => 0,
            'temp' => 28.4,
            'ph' => 7.17,
            'do' => .12,
            'cond' => 1836,
            'ntu' => .05,
            'grab_time' => '10:35',
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 59,
            'service' => 0,
            'temp' => 28.4,
            'ph' => 7.13,
            'do' => .09,
            'cond' => 2039,
            'ntu' => .13,
            'grab_time' => '12:20',
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('wells')->insert([
            'well_id' => 60,
            'service' => 0,
            'temp' => 26.2,
            'ph' => 7.20,
            'do' => .12,
            'cond' => 1778,
            'ntu' => .06,
            'grab_time' => '01:10',
            'date' => Carbon::parse('2021-04-01'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        // DB::table('wells')->insert([
        //     'well_id' => 21,
        //     'temp' => $faker->randomFloat(2, 23, 29),
        //     'ph' => $faker->randomFloat(2, 7.6, 8.0),
        //     'do' => $faker->randomFloat(2, 0.08, 0.20),
        //     'cond' =>  $faker->numberBetween(440, 520),
        //     'ntu' => $faker->randomFloat(2, .04, .15),
        //     'grab_time' => \Carbon\Carbon::now()->subMonths(12)->addHours(8)->format('H:i'),
        //     'date' =>  \Carbon\Carbon::now()->subMonths(12)->format('Y-m-d H:i:s'),
        //     'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        // ]);
    }
}
