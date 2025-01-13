<?php

namespace Database\Factories;

use App\Models\Discount;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{

    protected $model = Discount::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                
                'code'=> Str::upper(fake()->unique()->lexify('Disc-?????')),
                'quantity'=>fake()->numberBetween(0, 10000),
                'percentage'=> fake()->numberBetween(10, 90),
                'expiry_date'=> fake()->dateTimeInInterval('now','+3 months'),
                
            
        ];
    }
}
