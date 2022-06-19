@extends('layouts.master')

@section('title','Home page')



@section('content')
<div class="container mt-4">
  @foreach ($posts as $post)
      <div class="m-2">
          <h3 class="text-dark">{{$post->title}}</h3>
          <p href="/posts/{{$post->id}}">{{$post->body}}
          <a href="/posts/{{$post->id}}" class="btn btn-outline-primary btn-sm">Detail</a>
          </p>
          <div class="d-flex justify-content-end mr-5">
              <form action="/posts/{{$post->id}}/edit">
              <button type="submit" class="btn btn-outline-success">Edit</button>
              </form> 
                  &nbsp;&nbsp;&nbsp;

              <form action="/posts/{{$post->id}}" method='POST' onsubmit="return confirm('Are You Sure Delete Your Post?')">
               @csrf
               @method('DELETE')
              <button type="submit" class="btn btn-outline-danger">Delete</button>
              </form>
          </div>
      </div>    
      <hr>
  @endforeach
</div>
@endsection





