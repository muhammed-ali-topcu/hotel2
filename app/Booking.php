<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Room;
class Booking extends Model
{
    //
    //  use SoftDeletes;
    protected $fillable = [
        'room_id',
        'start_at',
        'customer_id',
        'end_at',
        'cost'
    ];
    public function room(){
        return $this->belongsTo('App\Room');
    }
    public function customer(){
        return $this->belongsTo('App\Customer');
    }
}
