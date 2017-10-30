@extends('layouts.app')

@section('content')
    <h1>Database for all reservation</h1>
    @if(count($reservations) > 0)
        @foreach($reservations as $reservation)
            <ul class="list-group">
                <li class="list-group-item">First Name: {{$reservation->first_name}}</li>
                <li class="list-group-item">Last Name: {{$reservation->last_name}}</li>
                <li class="list-group-item">State: {{$reservation->state}}</li>
                <li class="list-group-item">Reservation Date: {{$reservation->datepicker}}</li>
                <li class="list-group-item">Phone: {{$reservation->phone}}</li>
                <li class="list-group-item">Guest: {{$reservation->guest}}</li>
                <li class="list-group-item">Email: {{$reservation->email}}</li>
                <li class="list-group-item">Subject: {{$reservation->subject}}</li>
            </ul>
        @endforeach
    @endif
@endsection


