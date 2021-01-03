<?php

namespace Database\Factories;

use App\Models\Lab;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LabFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lab::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'eff_ph' => $this->faker->randomDigit, 
            'eff_cond' => $this->faker->numberBetween(440, 500),
            'eff_cl2t' => $this->faker->randomDigit,
            'eff_cl2f' => $this->faker->randomDigit,
            'eff_nh4t' => $this->faker->randomDigit,
            'eff_nh4f' => $this->faker->randomDigit,
            'eff_turb' => $this->faker->randomDigit,
            'eff_po4' => $this->faker->randomDigit,   
            //'lab_date' => date('Y-m-d', strtotime('now -' . $this->faker->unique()->numberBetween(1, 50) . ' months')),
            //'lab_date' => $this->faker->dateTimeBetween('-6 months', 'now')        
            'lab_date' => fn () => now()->subDays(rand(0, 1000)),
        ];
    }

     // To seed users with Labs, do this in php artisan tinker

    // $users = App\Models\User::all();
    // $users->each(function ($user) { App\Models\Lab::factory()->count(20)->create(['user_id' => $user->id]); });
}
