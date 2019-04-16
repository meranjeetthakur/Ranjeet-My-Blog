@extends('blog::layouts.master')

@section('content')
<h2 class="text-center">Add Posts</h2>
<form  method="post">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="title" class="form-control"  placeholder="Enter title" value="{{ isset($post) ? $post->title : ''}}" name="title">
    </div>
    <div class="form-group">
        <label for="pwd">Description:</label>
        <input type="description" class="form-control" placeholder="Enter description" value="{{ isset($post) ? $post->description : ''}}"  name="description">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

@stop
