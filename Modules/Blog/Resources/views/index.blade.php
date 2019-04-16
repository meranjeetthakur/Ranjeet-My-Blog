@extends('blog::layouts.master')

@section('content')
<h1 class="text-center">Blog Posts</h1>
@if(session()->has('level'))
<div class="row">
    <span class="{{session('level')}}">{!! session('content') !!}</span>
</div>
@endif
<div style="float:right;">
    <a href="/blog/add" class="btn btn-primary">Add</a>
</div>
    <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tile</th>
        <th>Description</th>
        <th>Created At</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
      <tr>
        <td> {{ $post->id }} </td>
        <td> {{ $post->title }}</td>
        <td> {{ $post->description }}</td>
        <td> {{ $post->created_at }}</td>
        <td> 
            <a href="/blog/edit/{{$post->id}}" class="">
                <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a href="/blog/delete/{{$post->id}}" class="">
                <span class="glyphicon glyphicon-trash"></span> 
            </a>
        </td>
      </tr>
      <tr>
          @endforeach
    </tbody>
  </table>
@stop
