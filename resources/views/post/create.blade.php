@extends('layouts.master')

@section('content')

 <div class="row justify-content-center">
        <h1>Create Post</h1>
</div>
<div class="container">
    <form action="{{ route('post.store')}}" method="POST">
    @csrf
    <input type="text" name="title" class="form-control mb-2" id="title" placeholder="Title:" >
    <textarea type="text" class="form-control mb-2" name="content" placeholder="Leave a text here:" id="floatingTextarea2" style="height: 100px" ></textarea>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('post.index') }}"><input type="button" class="btn btn-secondary" value="Cancel"></a>
    
</form>
</div>


@endsection