<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'message' => $this->facker->sentence,
            'message_at' => \Carbon\Carbon::now(),
            'pair' => 'EUR/USD',
            'pair_id' => 1,
            'price' => 1.20,
            'tp' => 1.25,
            'sl' => 1.19,
            'user_id' => 1,
            'position' => 'sale'
        ];
    }
}
