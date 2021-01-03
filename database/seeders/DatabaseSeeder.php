<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->times(10)->state([
            'created_at' => fn () => now()->subMinutes(rand(9, 59)),
        ])->create();

        //php artisan\App\Models\Lab::factory()->times(50)->create();
    }
}
