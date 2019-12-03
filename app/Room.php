<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Room extends Model
{
    //
    public function get_avillable_rooms(Date $start, Date $end){
    //    select b.room_id from rooms r, bookings b  where b.end_at<new_start_at OR b.start>new_end_at
        

    }
}
