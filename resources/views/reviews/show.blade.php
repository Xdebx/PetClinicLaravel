@extends('layouts.master')

@section('content')
<style >

body{margin-top:20px;}

.content-item {
    padding:30px 0;
    background-color:#FFFFFF;
}

.content-item.grey {
    background-color:#F0F0F0;
    padding:50px 0;
    height:100%;
}

.content-item h2 {
    font-weight:700;
    font-size:35px;
    line-height:45px;
    text-transform:uppercase;
    margin:20px 0;
}

.content-item h3 {
    font-weight:400;
    font-size:20px;
    color:#555555;
    margin:10px 0 15px;
    padding:0;
}

.content-headline {
    height:1px;
    text-align:center;
    margin:20px 0 70px;
}

.content-headline h2 {
    background-color:#FFFFFF;
    display:inline-block;
    margin:-20px auto 0;
    padding:0 20px;
}

.grey .content-headline h2 {
    background-color:#F0F0F0;
}

.content-headline h3 {
    font-size:14px;
    color:#AAAAAA;
    display:block;
}


#comments {
    box-shadow: 0 -1px 6px 1px rgba(0,0,0,0.1);
    background-color:#FFFFFF;
}

#comments form {
    margin-bottom:30px;
}

#comments .btn {
    margin-top:7px;
}

#comments form fieldset {
    clear:both;
}

#comments form textarea {
    height:100px;
}

#comments .media {
    border-top:1px dashed #DDDDDD;
    padding:20px 0;
    margin:0;
}

#comments .media > .pull-left {
    margin-right:20px;
}

#comments .media img {
    max-width:100px;
}

#comments .media h4 {
    margin:0 0 10px;
}

#comments .media h4 span {
    font-size:14px;
    float:right;
    color:#999999;
}

#comments .media p {
    margin-bottom:15px;
    text-align:justify;
}

#comments .media-detail {
    margin:0;
}

#comments .media-detail li {
    color:#AAAAAA;
    font-size:12px;
    padding-right: 10px;
    font-weight:600;
}

#comments .media-detail a:hover {
    text-decoration:underline;
}

#comments .media-detail li:last-child {
    padding-right:0;
}

#comments .media-detail li i {
    color:#666666;
    font-size:15px;
    margin-right:10px;
}

.emp-profile{
   
   margin-top: 5%;
    margin-bottom: 10%;
    border-radius: 1.5rem;
    background: #fff;
}
</style>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                               <td><img src="{{ asset('images/'.$services->img_path) }}" width ="360" height="360" class="img-circle" enctype="multipart/form-data"/></td>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h2>
                                        <p>Service ID: {{ $services->service_id}}</p>
                                    </h2>
                                    <h2>
                                       <p>Service name: {{ $services->service_name}}</p>
                                    </h2>
                                    <h2>
                                        <p>Service cost: {{ $services->service_cost}}</p>
                                    </h2>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<section class="content-item" id="comments">
    <div class="container">   
        <div class="row">
            <div class="col-sm-8"> 
    <form method="post" action="{{route('reviews.updateComment',$services->service_id)}}" enctype="multipart/form-data" >
  @csrf
  <div class="form-group"> 
    <label for="name" class="control-label">Codename</label>
    <input type="text" class="form-control " id="name" name="name" value="{{old('name')}}"placeholder="name">
    @if($errors->has('name'))
    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
   @endif 
  </div>
   <h3>Comments!</h3>
  <div class="form-group col-xs-12 col-sm-9 col-lg-10">
    <textarea name="comment" rows="4" cols="80"></textarea>
    @if($errors->has('comment'))
    <div class="alert alert-danger">{{ $errors->first('comment') }}</div>
     @endif 
    </div>    
<button type="submit" class="btn btn-primary">Save</button>
  <a href="{{url()->previous()}}" class="btn btn-default" role="button">Cancel</a>
  </div>     
</div>
</form>
                <h3>1Million Comments</h3>
                @foreach($servicess as $serve)
                <!-- COMMENT 1 - START -->
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $serve->name}}</h4>
                        <p>{{ $serve->comment}}</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>{{ $serve->created_at}}</li>
                            <li><i class="fa fa-thumbs-up"></i>534,455</li>
                        </ul>
                    </div>
                </div>
                <!-- COMMENT 1 - END -->
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection


