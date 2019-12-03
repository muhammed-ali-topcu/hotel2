<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert([
            'name'=>'customer1',
            'email'=>'customer1@test.com',
            'phone'=>'789789798'
        ]);
        DB::table('customers')->insert([
            'name'=>'customer2',
            'email'=>'customer2@test.com',
            'phone'=>'7467521798'
        ]);
        DB::table('customers')->insert([
            'name'=>'customer3',
            'email'=>'customer3@test.com',
            'phone'=>'789780208'
        ]);
    }
}
