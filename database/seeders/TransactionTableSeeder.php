<?php

namespace Database\Seeders;

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
                'bill_total'    => 245800
            ],
            [
                'merchant_id'   => 1,
                'outlet_id'     => 2,
                'bill_total'    => 645800
            ],
            [
                'merchant_id'   => 1,
                'outlet_id'     => 2,
                'bill_total'    => 545800
            ],
            [
                'merchant_id'   => 2,
                'outlet_id'     => 3,
                'bill_total'    => 445800
            ],
            [
                'merchant_id'   => 2,
                'outlet_id'     => 4,
                'bill_total'    => 765800
            ],
            [
                'merchant_id'   => 3,
                'outlet_id'     => 5,
                'bill_total'    => 575800
            ],
            [
                'merchant_id'   => 3,
                'outlet_id'     => 5,
                'bill_total'    => 965800
            ],

            [
                'merchant_id'   => 3,
                'outlet_id'     => 6,
                'bill_total'    => 345800
            ],
        ]);
    }
}
