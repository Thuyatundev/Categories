@extends('layouts.auth')
@section('title','Register')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-6 ">
<form action="/register" method="POST">
    @csrf
    <h2>Register Here</h2>
    <div class="form-group mt-4">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name='name'class="form-control" placeholder="Enter your name" value="{{old('name')}}">
      @error('name')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="email" name='email'class="form-control" placeholder="Enter Email" value="{{old('email')}}">
      @error('email')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter password" value="{{old('password')}}">
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>
</div>
</div>
@endsection