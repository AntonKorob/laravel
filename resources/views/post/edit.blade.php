@extends('layouts.main')

<!-- @section('title') -->
@section('title')
Title
@endsection

<!-- @section('content') -->
@section('content')
<div>
    <main class="container">

        <form action="{{ route('post.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3 w-50">
                <label for="title" class="form-label">Enter title</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Title"
                    value="{{$post->name}}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="post" class="form-control w-50" id="post" placeholder="Content"
                    required>{{$post->post}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a class=" btn btn-outline-secondary m-2 text-decoration-none" href="/posts">Back <svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z">
                    </path>
                </svg></a>
        </form>


    </main>
</div>
@endsection