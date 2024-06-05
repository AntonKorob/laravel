@extends('layouts.main')

@section('title')
Page_new
@endsection

@section('content')
<div class="container">
    <div class="bg-secondary rounded text-white w-75 m-3 p-3">

        <label for="name">Сalendar : </label>
        @foreach($date as $time)
        @if($time == $today)
        <b class="text-danger">{{$time}}</b>
        @else
        {{$time}}
        @endif
        @endforeach

        <x-button-back />

    </div>
</div>
@endsection