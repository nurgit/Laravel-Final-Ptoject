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

             <div class="jumbotron">
               <a href="/tutor">Back</a>|
               <a href="/logout">Logout</a>
               <div class="row">
                   <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                   </div>
                   <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                       <div class="container" style="border-bottom:1px solid black">
                         <h2>


                         @if (Session::has('username'))
                         {{{ Session::get('username') }}}
                         @endif

                       </h2>
                       </div>
                         <hr>
                       <ul class="container details">
                          <li><p><span class="" style="width:50px;"></span><b>User Name:</b><%= user.username%></p></li>
                         <li><p><b>Id      :</b> <span class="" style="width:50px;"></span><%= user.id%></p></li>
                         <li><p><span class="" style="width:50px;"><b>Email  :</b></span><%= user.email %></p></li>
                         <li><p><span class="" style="width:50px;"><b>User Type:</b></span><%= user.type%></p></li>

                       </ul>
                   </div>
               </div>
             </div>

  </body>
</html>
