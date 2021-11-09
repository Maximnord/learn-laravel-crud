@extends('layouts.master')

@section('content')

 <div class="row justify-content-center">
        <h1> <b>Post {{ $post->id }}</b> </h1>
</div>
<div class="container">
    <form action="{{ route('post.update', $post->id)}}" method="POST">
    @csrf
    @method('patch')

    <input type="text" name="title" class="form-control mb-2" id="title" value="{{$post->title}}" placeholder="Title:" >
    <textarea type="text" class="form-control mb-2" name="content" placeholder="Leave a text here:" id="floatingTextarea2" style="height: 100px"> {{ $post->content }}</textarea>
    
    <button type="submit" name="submit" class="btn btn-primary">Update</button>

    <a href="{{ route('post.show', $post->id) }}"><input type="button" class="btn btn-secondary" value="Cancel"></a>
</form>
</div>

    
@endsection