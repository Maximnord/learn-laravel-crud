@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h1>All posts</h1>
    </div>
    <hr>
    <a href="{{ route('post.create') }}"><input type="button" class="btn btn-primary mb-3" value="Create Post"></a>
    
    <ul class="list-group">

        @foreach ($posts as $post)
            <li class="list-group-item"><a href="{{route('post.show', $post->id)}}"> {{ $post->id }}. {{ $post->title }}</a> </li>
        @endforeach
        
    </ul>

</div>
    
@endsection