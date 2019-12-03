@extends('layouts.app')
@section('content')
<h2>New</h2>

<form action="/booking/store" method="post">

   <label for="">Notes</label>
   <input type="text"   value="">
   <select name="customer_id">
        <option value="">select</option>
      @foreach ($customers as $item)
          <option value="{{$item->id}}">{{$item->name}}</option>
      @endforeach
   </select>
   <label for="">start at</label>
   <input type="date" name="start_at" value="{{$booking->start_at}}" >

   <label for="">endt</label>
   <input type="date" name="end_at" value="{{$booking->end_at}}" >

   <select name="room_id" >
        <option value="">select</option>
      @foreach ($rooms as $item)
         <option value="{{$item->id}}">{{$item->number}}</option>
      @endforeach
    </select>
<label for="cost">cost</label>
<input type="number" value="{{$booking->cost}}" name="cost">
   <input type="submit" value="save">
   @csrf
</form>

@endsection
