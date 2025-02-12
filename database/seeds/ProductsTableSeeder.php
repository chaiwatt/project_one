<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'มาม่า',    
            ],
            [
                'name' => 'น้าปลา',    
            ],
            [
                'name' => 'น้ำตาล',    
            ],
            [
                'name' => 'coke',    
            ]
        ]);
    }
}
