<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Edit-Post</title>
</head>
<body>
     
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-success" href="/posts">Categories</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link text-success" href="/posts">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-success" href="/posts/create">Create-Post</a>
            </li>
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> --}}
          </ul>
        </div>
    </nav>
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
    
        <button type="submit" class="btn btn-outline-success text-light">Update</button>
        
        <button type="submit" class="btn btn-outline-warning text-light">Cancel</button>
    </form>
    <br>
    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>




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

