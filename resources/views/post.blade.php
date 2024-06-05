@extends('layouts.main')

@section('title')
Page_new
@endsection

@section('content')
<div class="row ">
    <div class="col">
        <h1>Admin post page</h1>
        <x-button-back />
        @foreach ($posts as $key => $post)
        <div class="border rounded bg-success text-white m-3 p-3 ">
            <h3>Post / {{$key}} : Name - {{ $post->name }}</h3>
            <div>
                {{ $post->post }}
            </div>
        </div>
        @endforeach
    </div>
    <div class="col mt-3">
        <h1>Table</h1>
        <table class="table table-hover">
            <tr>
                <th>id</th>
                <th>city</th>
                <th>daesciption</th>
            </tr>
            @foreach($city as $key => $val_city)
            <tr>
                <td>{{$key}}</td>
                <td>{{$val_city->city}}</td>
                <td>{{$val_city->description}}</td>
            </tr>
            @endforeach

        </table>
        <table class="table table-hover">
            <tr>
                <th>id</th>
                <th>country</th>
                <th>daesciption</th>
            </tr>
            @foreach($countries as $key => $country)
            <tr>
                <td>{{$key}}</td>
                <td>{{$country->country}}</td>
                <td>{{$country->description}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection