@extends('layouts.master')

@section('title','Home page')



@section('content')
<div class="container mt-4">

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      </div>
    @endif

  @foreach ($posts as $post)
      <div class="m-2">
          <h3 class="text-dark">{{$post->title}}</h3>
          {{-- {{$post->created_at->format('M d, Y ')}} --}}
         {{-- <i>{{$post->created_at->diffForHumans()}}</i>
           By {{ $post ->name}} --}}
           <i><p class="text-primary">{{$post->updated_at->diffForHumans()}}</i>by<b> 
            @php
            $userId = $post->user_id;
            $user = \App\Models\User::find($userId);
            echo $user ->name;
                
            @endphp  
        
            </b> </p>
          <p href="/posts/{{$post->id}}">{{$post->body}}
            @auth
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
          @endauth
      </div>    
      <hr>
  @endforeach

  {{ $posts->links() }}
</div>
@endsection





