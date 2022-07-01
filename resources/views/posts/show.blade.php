@extends('layouts.master')


@section('title','Show Post')
    

@section('content')
<div class="container-fluid mt-4">
  <div class="card text-white bg-dark mb-3">
    <h2 class="card-header text-center">Post show</h2>
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="text-muted"><i>{{$post->created_at->diffForHumans()}}</i> by <b> {{$post->author}}</b></p><br>
      <p class="card-text">{{$post->body}}</p>
    </div>
    <a href="/posts" type="button" class="btn btn-outline-info btn-block">Back</a>
  </div>
  
</div>
@endsection
    
