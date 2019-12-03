<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Rooms')->insert([
           'number'=>'101',
           'area'=>'111',
           'floor'=>'1',
           'decsription'=>'test',
           'room_type_id'=>'1'
        ]);
        DB::table('Rooms')->insert([
            'number'=>'102',
            'area'=>'111',
            'floor'=>'1',
            'decsription'=>'test',
            'room_type_id'=>'2'
         ]);
         DB::table('Rooms')->insert([
            'number'=>'103',
            'area'=>'111',
            'floor'=>'1',
            'decsription'=>'test',
            'room_type_id'=>'2'
         ]);
    }
}
