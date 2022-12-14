@extends('layouts.master')
@section('content')
<style>
 .container {
  color:  #FFFFFF;
}
</style>
<div class="container">
  <h2>Edit Pet</h2>
    {{ Form::model($pet,['route' => ['pet.update',$pet->pet_id],'method'=>'PUT','enctype' =>'multipart/form-data']) }}


  <div class="form-group">
    <label for="pname">Pet Name</label>
    {!! Form::text('pname',$pet->pname,array('class' => 'form-control')) !!}
    @if($errors->has('pname'))
   <div class="alert alert-danger">{{ $errors->first('pname') }}</div>
   @endif 
  </div>

  <div class="form-group" >
      <label for="customer" class="control-label">Owner</label>
       {!! Form::select('customer_id',$customers, $pet->customer_id,['class' => 'form-control form-select']) !!}

      @if($errors->has('customer'))
      <div class="alert alert-danger">{{ $errors->first('customer') }}</div>
      @endif 
  </div> 

  <div class="form-group" >
      <label for="pet_breed" class="control-label">Breed</label>
       {!! Form::select('petb_id',$pet_breed, $pet->petb_id,['class' => 'form-control form-select']) !!}
      @if($errors->has('petb_id'))
       <div class="alert alert-danger">{{ $errors->first('petb_id') }}</div>
      @endif 
  </div> 

    <div class="form-group">
    <label for="gender">Pet Gender</label>
    {!! Form::text('gender',$pet->gender,array('class' => 'form-control')) !!}
    @if($errors->has('gender'))
    <div class="alert alert-danger">{{ $errors->first('gender') }}</div>
   @endif 
  </div>

   <div class="form-group">
    <label for="age">Pet Age</label>
    {!! Form::text('age',$pet->age,array('class' => 'form-control')) !!}
    @if($errors->has('age'))
    <div class="alert alert-danger">{{ $errors->first('age') }}</div>
   @endif 
  </div>


 <div class="form-group">
    <label for="image" class="control-label">Customer Image:</label>
    <input type="file" class="form-control" id="image" name="image">
     <img src="{{ asset('images/'.$pet->img_path) }}" width ="100" height="100" class="img-circle" enctype="multipart/form-data"/>
    @if($errors->has('img_path'))
    <div class="alert alert-danger">{{ $errors->first('img_path') }}</div>
    @endif
  </div>

<button type="submit" class="btn btn-primary">Update</button>
<a href="{{url()->previous()}}" class="btn btn-default" role="button">Cancel</a>
  </div>     
</div>
{!! Form::close() !!} 
@endsection