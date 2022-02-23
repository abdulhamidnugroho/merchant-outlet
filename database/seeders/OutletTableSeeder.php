<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('outlets')->insert([
            [
                'merchant_id'   => 1,
                'outlet_name'   => 'Outlet Valhalla',
            ],
            [
                'merchant_id'   => 1,
                'outlet_name'   => 'Outlet Berkshire',
            ],
            [
                'merchant_id'   => 2,
                'outlet_name'   => 'Outlet Helsinki',
            ],
            [
                'merchant_id'   => 2,
                'outlet_name'   => 'Outlet Brighton',
            ],
            [
                'merchant_id'   => 3,
                'outlet_name'   => 'Outlet Uppsala',
            ],
            [
                'merchant_id'   => 3,
                'outlet_name'   => 'Outlet Northumbria',
            ],
        ]);
    }
}
