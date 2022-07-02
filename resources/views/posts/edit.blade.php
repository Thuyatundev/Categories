@extends('layouts.master')

@section('title','Edit post')
@section('content')
<div class="container mt-5 p-3">
  <form action="/posts/{{$post->id}}" method="POST" class="form-control bg-dark">
      <h2 class="text-center text-light">Edit Post</h2>
      @method('PUT')
      @csrf
      <label class="text-light">Post Title</label>
      <input type="text" name="title" value="{{$post->title}}" class="form-control">
      @error('title')
      <div style="color: red;">{{$message}}</div>
      @enderror
      <br>
      <label class="text-light">Post Body</label>
      <textarea name="body" cols="20" rows="5" class="form-control">{{$post->body}}</textarea>
      @error('body')
      <div style="color: red;">{{$message}}</div>
      @enderror
      <br>
      
      <div class="input-group mb-3">
        <select class="form-select" name="category[]" multiple>
            <option disabled>Choose...</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
  
      <button type="submit" class="btn btn-outline-success text-light">Update</button>
      
      <button type="submit" class="btn btn-outline-warning text-light">Cancel</button>
  </form>
  <br>
  <div class="progress">
      <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
    </div>
  </div>
@endsection
 




{{-- <h1>Update Form</h1> --}}

{{-- <form action="/posts/{{$post->id}}" method="POST">
    @method('PUT')
    @csrf
    <label>Post Title</label>
    <input type="text" name="title" value="{{$post->title}}">
    @error('title')
    <div style="color: red;">{{$message}}</div>
    @enderror
    <br><br>

    <label for="">Post Body</label>
    <textarea name="body" cols="20" rows="5">{{$post->body}}</textarea>
    @error('body')
    <div style="color: red;">{{$message}}</div>
    @enderror
    <br><br>

    <button type="submit">Update</button>
</form> --}}

