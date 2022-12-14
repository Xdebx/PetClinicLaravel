<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        
        {{-- <link rel="stylesheet" href="{{ url('src/css/homepage.css')}}"> --}}
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  /*background-color: #04AA6D;*/
  background: linear-gradient(#141e30, #243b55);
  color: white;
}
/*.container .emp-profile */
.container .emp-profile{
  border: 1px solid;
  padding: 5px;
  box-shadow: 5px 5px 5px #888888;
  color: #800080;
}

.emp-profile{
   /*padding: 2%;*/
   margin-top: 15%;
    margin-bottom: 10%;
    border-radius: 1.5rem;
    background: #fff;
}
.profile-head{
    color: #800080;
}

html {
  height: 100%;
}
 a:hover {
  background-color: #00FFFF;
  color: #FFFFFF;
}
.container-fluid{
  font-family: "Roboto", sans-serif;
  /*box-shadow: 5px 5px 5px #888888; */
  box-shadow: 5px 5px 5px #00FFFF; 
  /*background: #f2f2f2;*/
  background: linear-gradient(#141e30, #243b55);
  border-radius: 5rem;
  border: 2px solid;
  font-size: 15px;
/*
        width: 100%;
        height: 90px;
        margin: 0 auto;
        background-color: transparent;*/

}
.user-box{
font-family: "Roboto", sans-serif;
  box-shadow: 5px 5px 5px #00FFFF;
  /*background: #f2f2f2;*/
  border-radius: 10rem;
  box-sizing: border-box;
  font-size: 15px;
}

.login-box {
  width: 360px;
  height: 360px;
  /*padding: 8% 0 0;*/
  margin: auto;


}
.login-box {
  position: relative;
  z-index: 1;
  /*background: #FFFFFF;*/
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
input {
  font-family: "Roboto", sans-serif;
  width: 100%;
  /*border: 0;*/
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.login-box {
  font-family: "Roboto", sans-serif;
  box-shadow: 10px 10px 10px #00FFFF;
  background: #f2f2f2;
  border-radius: 10rem;
  box-sizing: border-box;
  font-size: 15px;
}
body {
  /*background: #76b852;  fallback for old browsers */
  /*background: rgb(141,194,111);*/
background: radial-gradient(#224646,#182828) repeat;
  /*background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);*/
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  height: 100vh;

  /*background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%);*/
  /*background: linear-gradient(#141e30, #243b55);*/
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>
       {{--  @yield('styles') --}}
    </head>
    <body>
@include('partials.header')

    <div class="container">
        @yield('content')
    </div>
    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 @yield('scripts')
    </body>
</html>