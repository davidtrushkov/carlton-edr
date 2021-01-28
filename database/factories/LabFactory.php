<?php

namespace Database\Factories;

use App\Models\Lab;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'eff_ph' => $this->faker->randomFloat(2, 7.6, 8.2), 
            'eff_cond' => $this->faker->numberBetween(440, 520),
            'eff_cl2t' => $this->faker->randomFloat(1, 4.8, 6.1),
            'eff_cl2f' => $this->faker->randomFloat(2, .04, .30),
            'eff_nh4t' => $this->faker->randomFloat(2, 1.05, 1.40),
            'eff_nh4f' => $this->faker->randomFloat(2, 0.0, .30),
            'eff_turb' => $this->faker->randomFloat(2, .04, .15),
            'eff_po4' => $this->faker->randomFloat(2, 1.70, 2.30),   
            
            'pre_ph' => $this->faker->randomFloat(2, 7.5, 8.1), 
            'pre_cond' => $this->faker->numberBetween(440, 500),
            'pre_cl2t' => $this->faker->randomFloat(1, 2.9, 4.3),
            'pre_nh4t' => $this->faker->randomFloat(2, .70, 1.15),
            'pre_turb' =>  $this->faker->randomFloat(2, .04, .15),

            'post_ph' => $this->faker->randomFloat(2, 7.5, 8.1), 
            'post_cond' => $this->faker->numberBetween(440, 500),
            'post_cl2t' => $this->faker->randomFloat(1, 6.2, 7.8),
            'post_nh4t' => $this->faker->randomFloat(2, 1.15, 1.60),
            'post_turb' =>  $this->faker->randomFloat(2, .04, .15),
            'post_po4' => $this->faker->randomFloat(2, 1.70, 2.30), 
            'lab_date' => $this->faker->unique()->dateTimeBetween('-24 months', 'now'),
            //'lab_date' => date('Y-m-d', strtotime('now -' . $this->faker->unique()->numberBetween(1, 50) . ' months')),
            //'lab_date' => fn () => now()->subDays(rand(0, 1000)),
        ];
    }

     // To seed users with Labs, do this in php artisan tinker

    // $users = App\Models\User::all();
    // $users->each(function ($user) { App\Models\Lab::factory()->count(20)->create(['user_id' => $user->id]); });
}
