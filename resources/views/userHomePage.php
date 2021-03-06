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
        <link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css">
    </head>
<body>
				
<nav class="navbar navbar-default">
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

      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a href=""><?php echo $email; ?></a></li>
        <li><span class="glyphicon glyphicon-user" id="userIcon"></span></li>
      </ul>
  </div>
</div>

</div>
</nav> 
<div class="row"  ng-app="businessApp">
  
       <div class="col-sm-3 col-md-2 sidebar" id="sideBar">
 
          <ul class="nav nav-sidebar">
            <li ><a href="#/"> Home <span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="#/inbox">Inbox  <span class="glyphicon glyphicon-envelope"></span></a></li>
            <li><a href="#/search">Search <span id="searchIcon" class="glyphicon glyphicon-search"></span></a></li>
            <li><a href="#/createBM">Create Business Modal <span class="glyphicon glyphicon-cloud-upload"></span></a></li>
            <li class="text-center"><a href="/logOut">Logout</a></li>
          </ul>


        </div>

        <div ng-view>
	   	  

	        	
	        

        	
        </div>

</div>


<br>
<br>

<footer class="footer navbar-fixed-bottom"></footer>






</body>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-beta.1/angular-route.js"></script>
        <!-- Angular Route -->
  

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