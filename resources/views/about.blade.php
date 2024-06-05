@extends('layouts.main')

<!-- @section('title') -->
@section('title')
About
@endsection

@section('content')
<div class="mt-3 ">
    <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center ">
            @foreach($show as $key => $value)
            @if($key < 3) <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3 ">
                        <h4 class="my-0 fw-normal ">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">

                            <p>{{$key +1}} $ {{$value->price}}</p>

                            <small class="text-body-secondary fw-light">/mo</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4 ">
                            <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                </div>
        </div>
        @endif
        @endforeach
</div>
</div>

<h2 class="display-6 text-center mb-4">Compare plans</h2>

<div class="table-responsive">
    <table class="table text-center">
        <thead>
            <tr>
                <th style="width: 8%;">Id</th>
                <th style="width: 32%;">Title</th>
                <th style="width: 42%;">Content</th>
                <th style="width: 22%;">Price</th>
            </tr>
        </thead>
        <tbody>

            @foreach($show as $item)
            <tr>
                <td scope="row" class="text-start">{{$item->id}}</td>
                <td scope="row" class="text-start">{{$item->title}}</td>
                <td scope="row" class="text-start">{{$item->content}}</td>
                <td scope="row" class="text-start">{{$item->price}}</td>

            </tr>
            @endforeach

        </tbody>
    </table>
    <div class="min-vh-100"> </div>
</div>
</main>
@endsection