@extends('blog::layouts.master')

@section('content')
<h2 class="text-center">Add Posts</h2>
<form action="/blog/add" method="post">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="title" class="form-control"  placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
        <label for="pwd">Description:</label>
        <input type="description" class="form-control" placeholder="Enter description" name="description">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

@stop
