@extends('layouts.auth')
@section('title','Login')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-6 ">
<form action="/login" method="POST">
    @csrf
    <h2>Login Here</h2>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="email" name='email'class="form-control" placeholder="Enter Email" value="{{old('email')}}">
      @error('email')
        <div style="color:red;">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Enter password">
        @error('password')
        <div style="color:red;">{{$message}}</div>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
</div>
</div>
@endsection