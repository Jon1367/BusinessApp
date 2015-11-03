
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
    
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar navbar-default">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
    <span class="icon-bar"></span>
  </button>
   <a class="navbar-brand" href="javascript:void(0)">The Business NetWork</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
      <li class="active"><a href="javascript:void(0)">Active</a></li>
      <li><a href="javascript:void(0)">Service</a></li>
      <li><a href="javascript:void(0)">Contact Info</a></li>
      </ul>
      <form class="navbar-form navbar-left">
      <input type="text" class="form-control col-lg-8" placeholder="Search">
      </form>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="javascript:void(0)" type="button" data-toggle="modal" data-target="#SignIn">SignUp</a></li>
        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#LogIn">LogIn</a></li>
      </ul>
  </div>
</div>

</div>
</nav> 

<!-- Nav Modals -->
<div id="SignIn" class="modal fade" role="dialog">
  <div class="modal-dialog">
<!-- Nav Content -->
<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <h2 class="text-center">Sign Up</h2>
      <div class="modal-body ">
        <form class="form-horizontal " role="form">
        <div class="form-group">
          <div class="col-sm-8 col-sm-push-2">
            <input type="email" class="form-control" id="email" placeholder="Enter email">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8 col-sm-push-2">
            <input type="password" class="form-control" id="email" placeholder="Enter password">
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-10 col-sm-push-4">
            <button type="submit" class="btn btn-lg  btn-primary">SignUp</button>
          </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- signIn modal -->

<div id="LogIn" class="modal fade" role="dialog">
  <div class="modal-dialog">
<!-- Nav Content -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <h2 class="text-center">LogIn</h2>
      <div class="modal-body ">
        <form method="POST" action="/logIn" class="form-horizontal " role="form">
        <div class="form-group">
          <div class="col-sm-8 col-sm-push-2">
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8 col-sm-push-2">
            <input type="password" class="form-control" name="password" placeholder="Enter password">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-10 col-sm-push-4">
            <button type="submit" class="btn btn-lg  btn-primary">LogIn</button>
          </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
</div>




 <div class="row blackBG">


		<h1 class="text-center whiteFont">Welcome to Business Network</h1>
		<div class="col-md-6 col-md-offset-3">
		<br>
			<p class="whiteFont" >&#09;  This is website/app that allows Users to check out similar 
		businesses on a mutual platform for a variety of motives such as
		 networking, knowledge of what the businesses have to offer and
		  the businesses financials  so that ultimately it allows the user 
		  to choose what business fits their need most. </p>
<br>
	</div>
  </div>

<br>
<br>

  <div class="row">
    <div class="col-md-4 col-md-push-1">
    <h2 class="text-center">How Can We Help</h2>
<br>


    <ul>
      <li>
        <p>Search for business near your area to see their business model and how the company financials.</p>
      </li>
      <li>
        <p>Sign up to collaborate with other business owners.</p>
      </li>
    </ul>
      
    </div>
    <div class="col-md-4 col-md-push-3">

<form class="form-horizontal" role="form">
      <h2 class="text-center">Search</h2>

    <div class="form-group">

      <div class="col-sm-10">
        <input  class="form-control" id="email" placeholder="Enter Business Name">
      </div>
    </div>
    <div class="form-group">

      <div class="col-sm-10">          
       
          <select class="form-control" id="pwd">
    <option>Search by industry</option>
    <option>Tech</option>
    <option>Start Up</option>
    <option>Food</option>
    <option>marketing</option>
    <option>small business</option>
    <option>business near me</option>

  </select>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button id="search" type="submit" class="btn btn-lg  btn-primary"  ng-click="search()">Search</button>
      </div>
    </div>
  </form>
    </div>
    
  </div> <!-- end of second row -->
<br>
<br>
          <!--Services -->
<section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading HeaderColor whiteFont">Service</h2>
                
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <span class="glyphicon glyphicon-stats"></span>
                
                    </span>
                    <h4 class="service-heading">Research</h4>
                    <p class="text-muted">Reasearch companies in any industry.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <span class="glyphicon glyphicon-user"></span>
             
                    </span>
                    <h4 class="service-heading">Collaborate</h4>
                    <p class="text-muted"> Find other business willing to collaborate.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <span class="glyphicon glyphicon-search"></span>
                    </span>
                    <h4 class="service-heading">Discover</h4>
                    <p class="text-muted">Find What other business are doing.</p>
                </div>
            </div>
    </div>
</section>
<br>
<br>
	

  <div class="row">
    <h2 class="text-center">Contact Us</h2>
      <br>
      <br>
    <div class="col-md-4 col-md-push-1">
      <h1>The Business Network</h1>
    </div>
      <div class="col-md-4 col-md-push-3">
        <ul>
          <li>  <b>e: </b> <a href="">Jonathano1367@gmail.com</a></li>
          <li>  <b>p: </b>  <a href="tel:13107173095">1(310)717-3095</a></li>
          <li>  <b>a: </b> <a href="">14211 Ocean Gate ave, Hawthorne, 32792, CA</a></li>
        </ul>
         <br>
      </div>
  </div>
</div> <!-- end of container -->
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
