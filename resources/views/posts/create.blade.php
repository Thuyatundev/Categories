@extends('layouts.master')

    @section('title','Create Post')  

  @section('content')  
  <div class="container mt-5">
    <form action="/posts" method="POST" class="form-control bg-dark">
        <h1 class="text-center text-light">Create Post</h1>
        @csrf
        <label class="text-light">Post Title</label><br>
        <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="Enter Post Title">
        @error('title')
        <div style="color:red;">{{$message}}</div>
        @enderror
        <br>
    
        <label class='text-light'>Post Body</label><br>
        <textarea name="body" cols="20" rows="5" class="form-control" placeholder="Enter Post Text ......">{{old('body')}}</textarea>
        @error('body')
        <div style="color:red;">{{$message}}</div>
        @enderror
        <br>
        
        <div class="input-group mb-3">
          <select class="form-select" name="category[]" multiple>
              <option selected>Choose...</option>
              @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
          </select>
      </div>
    
        <button type="submit" class="btn btn-outline-success text-light">Create</button>
        <button type="submit" class="btn btn-outline-danger justify-content-between"><a href="/posts" class="text-light" style="text-decoration: none;">Cancel</a> </button>
    </form>
    </div>
  </div>
@endsection

