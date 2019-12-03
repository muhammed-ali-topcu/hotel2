@extends('layouts.app')

@section('content')
<h1>Booking</h1>

    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
    @foreach ($bookings as $item)
    <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->customer->name}}</td>
    <td>{{$item->room->number}}</td>
    <td>{{$item->cost}}</td>
    <td>{{$item->start_at}}</td>
    <td>{{$item->end_at}}</td>
    <td><a href="/booking/show/{{ $item->id }}">show</a>    </td>
    <td><a href="/booking/delete/{{ $item->id }}">delete</a>    </td>


        </tr>
    @endforeach
</tbody>
</table>
@endsection
