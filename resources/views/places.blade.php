<!DOCTYPE html>
<html>
    <head>
        <title>The Business Network</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material.css">
    </head>
    <body ng-app="businessApp">
    <div ng-controller="searchCtrl">
    
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar navbar-default">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
    <span class="icon-bar"></span>
  </button>
   <a class="navbar-brand" href="/">The Business NetWork</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
      <li class="active"><a href="javascript:void(0)">Active</a></li>
      <li><a href="javascript:void(0)">Service</a></li>
      <li><a href="javascript:void(0)">Contact Info</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="javascript:void(0)" type="button" data-toggle="modal" data-target="#SignIn">SignUp</a></li>
        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#LogIn">LogIn</a></li>
      </ul>
  </div>
</div>

</div>
</nav> 
<br>
<br>
<div class="row blackBG" id="searchHeader">
  <div class="col-md-3 col-md-offset-3">
      <form action="">
      <br>
      <br>
      <div class="input-group">
    
        <input  class="form-control" name="query" placeholder="Enter Business Name">
            <span class="input-group-addon glyphicon glyphicon-search" id="inputSearchIcon"></span>       
         </div>
      </form>
  </div>

  <div class="col-md-5 ">
  <h4 class="text-center">Filters</h4>
    <form action="" >

      <ul id="filters">

        <li>
          <div class="togglebutton">
              <label>
                  <input type="checkbox" checked=""><span class="toggle"></span> Near By
              </label>
          </div>
        </li>
        
        <li>
          <div class="togglebutton">
              <label>
                  <input type="checkbox" checked=""><span class="toggle"></span> A-Z
              </label>
          </div>
        </li>

        <li>
          <div class="togglebutton">
            <label>
                <input type="checkbox" checked=""><span class="toggle"></span> Highest Ratting 
              </label>
            </div>
        </li>

        <li>
          <div class="togglebutton">
            <label>
                <input type="checkbox" checked=""><span class="toggle"></span>  Lowest Ratting
            </label>
          </div>
        </li>

      </ul>

    </form>

  </div>

</div>

<br>
<div class="row">
    <div class="col-md-5 col-md-offset-4">
      @for ($i = 0; $i < count($places['results']); $i++)
     <a href="/processName/{{ $places['results'][$i]['name'] }} ">
        <div class="panel panel-info">
          <div class="panel-heading">
                <h3 class="panel-title"> {{ $places['results'][$i]['name'] }} </h3>
          </div>
          <div class="panel-body">

          @if ( $places['results'][$i]['rating'])

          <span class="col-sm-2"> <b>Ratting:</b>{{ $places['results'][$i]['rating'] }}</span>


          @endif

          <img class="col-sm-2 col-sm-offset-2" src="{{ $places['results'][$i]['icon'] }}" alt="">




                                     
          </div>
        </div>
        </a>
    
       
      @endfor
    </div>

</div>




</body>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js.map"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
    <script src="/js/location.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68118376-2', 'auto');
  ga('send', 'pageview');

</script>

</html>