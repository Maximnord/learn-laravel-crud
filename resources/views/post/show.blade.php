@extends('layouts.master')

@section('content')

<div class="container">
     <div class="row justify-content-center">
        <h1> <b>Post {{ $post->id }}</b> </h1>
    </div>
    <hr>
     <div>
        <a href="{{ route('post.index') }}"><input type="button" class="btn btn-success" value="Back"> </a>
        
    </div>
    <div class="row mt-2">
        <div class="col-6">
            <div class="title"> <h3><b>{{ $post->title }}</b></h3>  </div><hr>
            <div class="content">{{ $post->content }}</div>
        </div>
        
    </div>
    <hr>
    <div>
        
      <form action="{{ route('post.delete', $post->id) }}" method="post">
          @csrf
          @method('delete')
          <a href="{{ route('post.edit', $post->id) }}"><input type="button" class="btn btn-primary " value="Edit post"></a>
          <input class="btn btn-danger" type="submit" value="Delete">
      </form>  
        

    </div>
        
</div>
    
@endsection