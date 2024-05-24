@extends('layouts.main')

<!-- @section('title') -->
@section('title')
About
@endsection

@section('content')
<div class="container lst">
    <h1>Laravel 8 multiple image upload Tutorial</h1>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <form method="post" action="{{ route('file.post') }}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="control-group">
            <input type="file" name="images[]" class="myfrm form-control" multiple>
        </div>
        <button type="submit" class="btn btn-success" style="margin-top:10px">Upload</button>
    </form>
</div>
@endsection