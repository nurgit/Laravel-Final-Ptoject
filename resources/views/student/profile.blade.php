<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">
                .details li {
            list-style: none;
          }
          li {
              margin-bottom:10px;

          }
    </style>

  </head>
  <body style="background-color:#25274d;">

    <div  class="container" style="margin-top: 70px;">
    <a href="{{ url('student/profile/pdf') }}" class="btn btn-danger">Convert into PDF</a>
             <div class="jumbotron">
               <a href="/student">Back</a>|
               <a href="/logout">Logout</a>
               
               <div class="row">
                   <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                   <img src="{{URL::asset('img/unnamed.png')}}" class="img">
                   </div>
                   <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                       <div class="container" style="border-bottom:1px solid black">
                         <h2>


                         @if (Session::has('username'))
                         {{{ Session::get('username') }}}
                         @endif

                       </h2>
                       </div>
                       </br>

                       <ul class="container details">
                         @foreach ($user as $user)
                          <li><p><span class="" style="width:50px;"></span><b> User Name: </b> {{$user->username}}</p></li>
                         <li><p><b>Id      :</b> <span class="" style="width:50px;"></span>{{$user->id}}</p></li>
                         <li><p><span class="" style="width:50px;"><b>Email  :</b></span>{{$user->email}}</p></li>
                         <li><p><span class="" style="width:50px;"><b>User Type:</b></span>{{$user->type}}</p></li>
                         @endforeach
                       </ul>

                   </div>
               </div>
             </div>

  </body>
</html>
