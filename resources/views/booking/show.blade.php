@extends('layouts.app')
@section('content')
<h2>Updating</h2>
<form action=" /booking/update/" method="POST">
    <input type="hidden" value="{{ $booking->id }}" name="booking_id">
   <select name="customer_id">
      @foreach ($customers as $item)
          <option {{ $booking->customer_id===$item->id? 'selected':'' }} value="{{$item->id}}">{{$item->name}}</option>
      @endforeach
   </select>
   <label for="">start at</label>
   <input type="date" name="start_at" value="{{$booking->start_at}}" >

   <label for="">endt</label>
   <input type="date" name="end_at" value="{{$booking->end_at}}" >

   <select name="room_id" >
      @foreach ($rooms as $item)
         <option value="{{$item->id}}" {{ $booking->room_id===$item->idphp artisan make:auth
 ?'selected':'' }} >{{$item->number}}</option>
      @endforeach
    </select>
<label for="cost">cost</label>
<input type="number" value="{{$booking->cost}}" name="cost">
   <input type="submit" value="save">
   @csrf
</form>

@endsection
