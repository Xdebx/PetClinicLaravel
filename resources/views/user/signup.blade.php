@extends('layouts.master')
@section('content')
<div class="container">
<ul class="errors">
 @foreach($errors->all() as $message)
   <li><p>{{ $message }}</p></li>
 @endforeach
 </ul>
  <h2>Create new user</h2>
  <form method="post" action="{{route('user.signup')}}" enctype="multipart/form-data" >
  @csrf
  <div class="form-group">
    <label for="name" class="control-label">Username</label>
    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Firstname">
    @if($errors->has('name'))
    <small>{{ $errors->first('name') }}</small>
   @endif 
  </div> 
  <div class="form-group">
    <label for="addressline" class="control-label">Addressline</label>
    <input type="text" class="form-control" id="addressline" name="addressline" value="{{old('addressline')}}" placeholder="Address">
    @if($errors->has('addressline'))
    <small>{{ $errors->first('addressline') }}</small>
   @endif 
  </div> 
  <div class="form-group">
    <label for="town" class="control-label">Town</label>
    <input type="text" class="form-control" id="town" name="town" value="{{old('town')}}" placeholder="Town">
    @if($errors->has('town'))
    <small>{{ $errors->first('town') }}</small>
   @endif 
  </div> 
  <div class="form-group">
    <label for="phone" class="control-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}" placeholder="Firstname">
    @if($errors->has('phone'))
    <small>{{ $errors->first('phone') }}</small>
   @endif 
  </div> 
  <div class="form-group">
    <label for="zipcode" class="control-label">Zipcode</label>
    <input type="number" class="form-control" id="zipcode" name="zipcode" value="{{old('zipcode')}}" placeholder="Firstname">
    @if($errors->has('zipcode'))
    <small>{{ $errors->first('zipcode') }}</small>
   @endif 
  </div> 
  <div class="form-group"> 
    <label for="email" class="control-label">Email</label>
    <input type="email" class="form-control " id="email" name="email" value="{{old('email')}}"placeholder="Email">
    @if($errors->has('email'))
    <small>{{ $errors->first('email') }}</small>
   @endif 
  </div>
<div class="form-group"> 
    <label for="password" class="control-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" placeholder="Password">
    @if($errors->has('password'))
    <small>{{ $errors->first('password') }}</small>
   @endif 
  </div>
  <div class="form-group">
    <label for="image" class="control-label">User Image</label>
    <input type="file" class="form-control" id="image" name="image">
    @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
<button type="submit" class="btn btn-primary">Save</button>
  <a href="{{url()->previous()}}" class="btn btn-default" role="button">Cancel</a>
  </div>     
</div>
</form> 
@endsection