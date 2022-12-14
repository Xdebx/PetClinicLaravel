@extends('layouts.master')
@section('content')
<style >
 .login-box{
    background: linear-gradient(#141e30, #243b55);
    color: #FFFFFF;
    }
</style>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <div class="login-box">
                 <h2>Sign in</h2>
            <form class="" action="{{ route('employee.signin') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="user-box">
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
               <div class="user-box">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                     <input type="submit" value="SignIn" class="btn btn-primary">
             </form>
        </div>
    </div>
@endsection