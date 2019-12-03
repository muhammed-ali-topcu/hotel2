<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('room_types')->insert([
            'name'=>'Single',
            'description'=>'singel'
        ]);
        DB::table('room_types')->insert([
            'name'=>'Double',
            'description'=>'Double'
        ]);
    }
}
