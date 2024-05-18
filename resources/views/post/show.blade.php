@extends('layouts.main')

<!-- @section('title') -->
@section('title')
Title
@endsection

<!-- @section('content') -->
@section('content')
<div>
    <main class="container">
        <div>{{ $post->id}} . {{ $post->name }}</div>
        <div>{{ $post->post}}</div>

        <div class="d-flex">
            <!-- Edit -->
            <a class=" btn btn-outline-primary m-2 text-decoration-none" href="{{$post->id}}/edit">Edit
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                </svg></a>

            <!-- Delete -->
            <form action="{{route('post.delete', $post->id)}}" method="post" class="m-2">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="Delete">
            </form>

            <!-- Back -->
            <a class=" btn btn-outline-secondary m-2 text-decoration-none" href="/posts">Back
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z">
                    </path>
                </svg></a>
        </div>
    </main>
</div>
@endsection