<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth;
use Illuminate\Routing\Controller;
use App\Booking;
use App\Room;
use App\Customer;
use App\RoomType;

class BookingController extends Controller
{
    protected $test;
    protected $data = [];
    protected $room;
    function __construct()
    {
        $test = '000';

    }

    public function index()
    {
        $data = [];
        $room = new Room;
        $rooms = $room->all();
        $data['rooms'] = $rooms;
        $booking = new Booking;
        $data['bookings'] = $booking->all();

        return view('\booking\index', $data);
    }
    public function new()
    {
        $data = [];
        $room = new Room;
        $rooms = $room->all();
        $data['rooms'] = $rooms;
        $customer = new Customer;
        $data['customers'] = $customer->all();
        $booking = new Booking;
        $data['booking'] = $booking;
        return view('\booking\new', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'start_at'=>'required',
            'end_at'=>'required',
            'customer_id'=>'required',
            'room_id'=>'required'
        ]);
        $booking = Booking::create($request->input());


        return redirect()->action('BookingController@index');
    }

    public function show($id)
    {
        $data=[];
        $booking= Booking::find($id);
        $data['booking']=$booking;
        $data['customers']=Customer::get();
        $data['rooms']=Room::get();
        return view('/booking/show',$data);
    }
    public function update(Request $request){

        $request->validate([
            'start_at'=>'required',
            'end_at'=>'required',
            'customer_id'=>'required',
            'room_id'=>'required'
        ]);
        $id=$request->input('booking_id');
        $booking=Booking::find($id);
        $booking->fill($request->input());
        $booking->update();

        return redirect()->action('BookingController@index');
    }

    public function delete($id)
    {
        $booking=Booking::find($id);
        $booking->delete();
        return redirect()->action('BookingController@index');
    }
}
