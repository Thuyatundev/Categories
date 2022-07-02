@extends('layouts.master')

@section('title','Home page')



@section('content')
<div class="container mt-4">

  <div class="row justify-content-end">
      <div class="col-6">
        <nav class="navbar navbar-light bg-light">
          <form class="form-inline">
            <input class="form-control mr-md-4 col-6" name="search" placeholder="Search" aria-label="Search" value={{request('search')}}>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </nav>
      </div>
  </div>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      </div>
    @endif

 @if(count($posts)> 0)
    @foreach ($posts as $post)
    <div class="m-2">
        <h3 class="text-dark">{{$post->title}}</h3>
        {{-- {{$post->created_at->format('M d, Y ')}} --}}
        {{-- <i>{{$post->created_at->diffForHumans()}}</i>
          By {{ $post ->name}} --}}
          <i><p class="text-primary">{{$post->updated_at->diffForHumans()}}</i> by 
          {{-- <b>{{$post->author}} </b>--}} 
          <b>{{$post->user->name}}</b>
        </p> 
          {{-- @php
          $userId = $post->user_id;
          $user = \App\Models\User::find($userId);
          echo $user ->name;
          @endphp   --}}
          
        <p href="/posts/{{$post->id}}">{{$post->body}}

          <ul>
            @foreach ($post->categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
            </ul>

          @if($post->isOwnPost())
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
        @endif
    </div>    
    <hr>
    @endforeach
@else
    Posts not Found !!!!
@endif
  {{ $posts->links() }}
</div>
@endsection





