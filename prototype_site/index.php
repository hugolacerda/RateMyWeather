<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Rate My Weather</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png"/>
    <link rel="shortcut icon" href="../assets/ico/favicon.png"/>
  </head>

  <body>
  
  <?php 
	        	$url = "http://api.hostip.info/get_json.php?position=true";
				$results = file_get_contents($url);
				//var_dump($results);
				$deCode = json_decode($results, true);
				// var_dump($deCode);
				$cityData = $deCode["city"];
				
				$state = preg_replace("/^.+, /", '' , $cityData);
				//echo $state;
				
				$city = preg_replace("/, \w\w$/", '' , $cityData);
				//echo $city;
				
				$cityFix = preg_replace("/ /", "_" , $city);
				//echo $cityFix;
				
				$weatherAPI = "http://api.wunderground.com/api/e6a8c06bb1ce5653/conditions/q/". $state. "/" . $cityFix .".json";
				$results = file_get_contents($weatherAPI);
				//var_dump($results);
				$deCode = json_decode($results, true);
				//var_dump($deCode);
				
				
        	?>
        	<?php 
        	 	//echo ('<img src="{$deCode["current_observation"]["icon_url"]}" />');
        	 	//echo("<br />".$deCode['current_observation']['icon_url']);
        	 	//echo ('<br /><img src="'.$deCode['current_observation']['icon_url'].'" />');
        	
	        	//var_dump($deCode['current_observation']['icon_url']);
	        	
	        	$map = "http://api.wunderground.com/api/e6a8c06bb1ce5653/animatedradar/q/" . $state . "/" . $cityFix . ".gif?newmaps=1&timelabel=1&timelabel.y=10&num=5&delay=50";
	        	//echo "<img src='".$map."' />";
	        	
        	?>
  
  
  					<!-- Nav Bar -->

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Rate My Weather</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    					<!-- Container -->
    

 
          <div class="container">   
           <div class="hero-unit">
			<div class="row">		     
		      	<div class="span4 offset1">  		       
			        <img src="<?php echo $map; ?>" class="img-rounded">    <!-- map --> 
		      	</div>
		      	<div class="span5 ">
		      		<h1>City: <?php echo $deCode['current_observation']['display_location']['city']; ?></h1><br>
			      		<div class="row">
				      		<div class="span4">
				      		<p class="lead">
				      			<strong>Weather Type:</strong> <?php echo $deCode['current_observation']['weather']; ?><br>
								<strong>Temperature:</strong> <?php echo $deCode['current_observation']['temperature_string']; ?><br>				      		
					      		<strong>Humidity:</strong> <?php echo $deCode['current_observation']['relative_humidity']; ?><br>
					      		<strong>Wind Speed:</strong> <?php echo $deCode['current_observation']['wind_mph']; ?> mph<br>
					      		<strong>Wind Direction:</strong> <?php echo $deCode['current_observation']['wind_dir']; ?></p>
				      		</div>
				      		<div class="span1">
					      	<img src="<?php echo $deCode['current_observation']['icon_url']; ?>" class="img-rounded" width="200">
					      		<div class="row">
					      		<div class="focus-font">
					      			<div class="span1">
					      				
<!-- 					      					<i class="icon-thumbs-up span-green"></i> -->
					      			</div>
					      			<div class="span1">
					      				
<!-- 					      				<i class="icon-thumbs-down span-red"></i> -->
					      			</div>
					      		</div>

					      		</div>
				      		</div>
			      		</div>
		      	</div>
			</div>
           </div>
          </div>     
          <div class="container">     
	          <div class="row-fluid">
	            <div class="span4">
	              <h2>Heading</h2>
	              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	              <p><a class="btn" href="#">View details &raquo;</a></p>
	            </div><!--/span-->
	           
	            <div class="span4">
	              <h2>Heading</h2>
	              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	              <p><a class="btn" href="#">View details &raquo;</a></p>
	            </div><!--/span-->
	            <div class="span4">
	              <h2>Heading</h2>
	              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	              <p><a class="btn" href="#">View details &raquo;</a></p>
	            </div><!--/span-->
	          </div><!--/row-->
	 
	        </div><!--/span-->
	      </div><!--/row-->
	     </div>
      <hr>

      <footer>
        <div class="container">
       	 <p>&copy; Company 2013</p>
        </div>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
