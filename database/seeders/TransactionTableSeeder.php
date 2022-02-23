<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            [
                'merchant_id'   => 1,
                'outlet_id'     => 1,
                'bill_total'    => 245800,
                'created_at'    => new Carbon('2021-11-09')
            ],
            [
                'merchant_id'   => 1,
                'outlet_id'     => 2,
                'bill_total'    => 645800,
                'created_at'    => new Carbon('2021-11-18')

            ],
            [
                'merchant_id'   => 1,
                'outlet_id'     => 2,
                'bill_total'    => 545800,
                'created_at'    => new Carbon('2021-11-25')
            ],
            [
                'merchant_id'   => 2,
                'outlet_id'     => 3,
                'bill_total'    => 445800,
                'created_at'    => new Carbon('2021-11-29')
            ],
            [
                'merchant_id'   => 2,
                'outlet_id'     => 4,
                'bill_total'    => 765800,
                'created_at'    => new Carbon('2021-12-09')
            ],
            [
                'merchant_id'   => 3,
                'outlet_id'     => 5,
                'bill_total'    => 575800,
                'created_at'    => new Carbon('2022-01-15')
            ],
            [
                'merchant_id'   => 3,
                'outlet_id'     => 5,
                'bill_total'    => 965800,
                'created_at'    => new Carbon('2022-01-27')
            ],

            [
                'merchant_id'   => 3,
                'outlet_id'     => 6,
                'bill_total'    => 345800,
                'created_at'    => new Carbon('2022-02-25')
            ],
        ]);
    }
}
