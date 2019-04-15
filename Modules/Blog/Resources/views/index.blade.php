@extends('blog::layouts.master')

@section('content')
<h1 class="text-center">Blog Posts</h1>
    <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tile</th>
        <th>Description</th>
        <th>Created At</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
      <tr>
        <td> {{ $post->id }} </td>
        <td> {{ $post->title }}</td>
        <td> {{ $post->description }}</td>
        <td> {{ $post->created_at }}</td>
      </tr>
      <tr>
          @endforeach
    </tbody>
  </table>
@stop
