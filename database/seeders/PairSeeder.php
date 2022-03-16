<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pairtypes = [
            [
                'name' => 'Majoor pairs',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Cross pairs',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Comodity pairs',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Digital pairs',
                'created_at' => Carbon::now(),
            ],
        ];

        DB::table('pairtypes')->insert($pairtypes);


        $pairs = [
            [
                'name' => 'EUR/USD',
                'pairtype_id' => 1,
                'base' => 'EUR',
                'symbol' => 'USD',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'GBP/USD',
                'pairtype_id' => 1,
                'base' => 'NZD',
                'symbol' => 'USD',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'GBP/USD',
                'pairtype_id' => 1,
                'base' => 'GBP',
                'symbol' => 'USD',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'USD/CHF',
                'pairtype_id' => 1,
                'base' => 'USD',
                'symbol' => 'CHF',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'USD/JPY',
                'pairtype_id' => 1,
                'base' => 'USD',
                'symbol' => 'JPY',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'AUD/USD',
                'pairtype_id' => 1,
                'base' => 'AUD',
                'symbol' => 'USD',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'USD/CAD',
                'pairtype_id' => 1,
                'base' => 'USD',
                'symbol' => 'CAD',
                'created_at' => Carbon::now(),
            ],
            // Cross Pair
            [
                'name' => 'AUD/CAD',
                'pairtype_id' => 2,
                'base' => 'AUD',
                'symbol' => 'CAD',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'AUD/JPY',
                'pairtype_id' => 2,
                'base' => 'AUD',
                'symbol' => 'JPY',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'AUD/NZD',
                'pairtype_id' => 2,
                'base' => 'AUD',
                'symbol' => 'NZD',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'CAD/JPY',
                'pairtype_id' => 2,
                'base' => 'CAD',
                'symbol' => 'JPY',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'CHF/JPY',
                'pairtype_id' => 2,
                'base' => 'CHF',
                'symbol' => 'JPY',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'EUR/AUD',
                'pairtype_id' => 2,
                'base' => 'EUR',
                'symbol' => 'AUD',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'EUR/CAD',
                'pairtype_id' => 2,
                'base' => 'EUR',
                'symbol' => 'CAD',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'EUR/CHF',
                'pairtype_id' => 2,
                'base' => 'EUR',
                'symbol' => 'CHF',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'EUR/GBP',
                'pairtype_id' => 2,
                'base' => 'EUR',
                'symbol' => 'GBP',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'EUR/JPY',
                'pairtype_id' => 2,
                'base' => 'EUR',
                'symbol' => 'JPY',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'EUR/TRY',
                'pairtype_id' => 2,
                'base' => 'EUR',
                'symbol' => 'TRY',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'GBP/AUD',
                'pairtype_id' => 2,
                'base' => 'GBP',
                'symbol' => 'AUD',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'GBP/CAD',
                'pairtype_id' => 2,
                'base' => 'GBP',
                'symbol' => 'CAD',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'GBP/CHF',
                'pairtype_id' => 2,
                'base' => 'GBP',
                'symbol' => 'CHF',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'GBP/JPY',
                'pairtype_id' => 2,
                'base' => 'GBP',
                'symbol' => 'JPY',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'NZD/JPY',
                'pairtype_id' => 2,
                'base' => 'NZD',
                'symbol' => 'JPY',
                'created_at' => Carbon::now(),
            ],
            // COMMODITY PAIRS
            [
                'name' => 'XAG/USD',
                'pairtype_id' => 3,
                'base' => 'XAG',
                'symbol' => 'USD',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'XAU/USD',
                'pairtype_id' => 3,
                'base' => 'XAU',
                'symbol' => 'USD',
                'created_at' => Carbon::now(),
            ],
            // CRYPTP PAIRS
            [
                'name' => 'BTC/USD',
                'pairtype_id' => 4,
                'base' => 'BTC',
                'symbol' => 'USD',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'ETH/USD',
                'pairtype_id' => 4,
                'base' => 'ETH',
                'symbol' => 'USD',
                'created_at' => Carbon::now(),
            ],

        ];

        DB::table('pairs')->insert($pairs);
    }
}
