<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchants')->insert([
            [
                'user_id'       => 1,
                'merchant_name' => 'Merchant 1',
            ],
            [
                'user_id'       => 2,
                'merchant_name' => 'Merchant 2',
            ],
            [
                'user_id'       => 3,
                'merchant_name' => 'Merchant 3',
            ],
        ]);
    }
}
