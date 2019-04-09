<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="import" href="bower_components/vaadin-date-picker/vaadin-date-picker.html">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


</head>
<body onload="myMove()" ng-app="myApp">
<nav class="navbar navbar-light bg-light row" >
	<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6" id="hh1">
		<h1  class=" h1_tag" >Online appointment</h1>
	</div>
	<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 search-container" >
		<form class="form-inline">
	    	<input type="text" placeholder="Search.." name="search" class="search" id="search"  ng-model="test">
	      	<button type="button" class="search_button" ><i class="fa fa-search"></i></button>
	    </form>
  </div>
</nav>

<!-- As a heading -->
<nav class="navbar navbar-light bg-light nav2 navbar-inverse" id="Nav" >
	<div class="container-fluid" style="background-color: white;">
		<div class="navbar-header">
			<!-- <a class="navbar-brand" href="#"></a> -->
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		    	<span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		    </button>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar" >
		  <ul class="nav navbar-nav" >
		  	<li><a href="#" id="hairsalon">hair salon</a></li>
		  	<li><a href="#" id="hairstyle">Hair style</a></li>
		  	<li><a href="#" id="spamassage">Spa & Massage</a></li>
		  	<li><a href="#" id="nailspa">Nail Spa</a></li>
		  	<li><a href="#" id="bodyart">Body Art</a></li>
		  	<li><a href="#" id="bridalmakeup">Bridal Makeup</a></li>
		  </ul>
		</div>
	</div>
</nav>

<div class="col-md-12">
	<div class="col-md-4 man" style="background-color: rgba(225,225,225,0.5); position: sticky;">
		<p style="font-size: 17px:; color: rgb(70,147,225);"><i class="far fa-clock" style="font-size: 17px ;  color: rgb(70,147,225);"></i>  <b>Availability</b></p>
		<label>Choose your date: </label>
		<input type="date" name="" class="dates" placeholder="Choose your date">
		<div class="dropdown">
		    <button type="button" class="  dropdown-toggle ddbtn" data-toggle="dropdown">
		     Services <span class="caret"></span>
		    </button>
		    <div class="dropdown-menu" role="menu">
		      <li><a class="dropdown-item" href="#">Hair cut</a></li>
		      <li><a class="dropdown-item" href="#">Color</a></li>
		      <li><a class="dropdown-item" href="#">Highlights</a></li>
		      <li><a class="dropdown-item" href="#">Makeup</a></li>
		      <li><a class="dropdown-item" href="#">Hair spa</a></li>
		    </div>
		</div>
		<div>
			<p style="color: rgb(70,147,225)"><b>Choose by Rating:</b></p>
			<input type="radio" name="vehicle1" value="Bike" id="5star"> 
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<br>
			<input type="radio" name="vehicle1" value="Bike" id="4star"> 
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star "></span>
			<br>
			<input type="radio" name="vehicle1" value="Bike" id="3star"> 
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star "></span>
			<span class="fa fa-star "></span>
			<br>
			<input type="radio" name="vehicle1" value="Bike" id="2star"> 
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star "></span>
			<span class="fa fa-star "></span>
			<span class="fa fa-star "></span>
			<br>
			<input type="radio" name="vehicle1" value="Bike" id="1star"> 
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star "></span>
			<span class="fa fa-star "></span>
			<span class="fa fa-star "></span>
			<span class="fa fa-star "></span>
			<br>
		</div>

		<div class="carousel-div"> 
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>
		    <div class="carousel-inner">
		      <div class="item active">
		        <img src="carousal1.jpg" alt="Los Angeles" style="width:100%;">
		      </div>

		      <div class="item">
		        <img src="carousal2.jpg" alt="Chicago" style="width:100%;">
		      </div>
		    
		      <div class="item">
		        <img src="carousal3.jpg" alt="New york" style="width:100%;">
		      </div>
		    </div>
		  
		  </div>
		</div>


	</div>

	<div class="col-md-8 col-sm-12 right_div"   ng-controller="customersCtrl">
		<div ng-repeat="x in names | filter:test" >
		  	<?php
		  	$name="{{x.name}}";
		  	$star="{{x.star}}";
		  	$star=substr($star,0,1);
		  	$star=(int)$star;
		  	echo $star;
		  	$address2="{{x.address2}}";
		  	$s1="{{x.service1}}";
		  	$s2="{{x.service2}}";
		  	$s3="{{x.service3}}";
			echo'<div class="'.ucfirst($address2).' '.ucfirst($name).' '.ucfirst($star).' '.ucfirst($s1).' '.ucfirst($s2).' '.ucfirst($s3).' division">'; 
			?>
				<div class="col-md-4 iimmgg col-sm-12" >
					<img src="img3.jpg" class="img-responsive">
				</div>
				<div class="col-md-8 col-sm-12">
				<a href=""><h3>{{x.name}}</h3></a><h5>
				<?php
				for($i =0 ;$i<$star;$i++)
				echo '
				<span class="fa fa-star checked"></span>
				';
				for($i=0;$i<5-$star;$i++)
				{
					echo '<span class="fa fa-star"></span>';
				}
				?>
				</h5>
				<h5>{{x.hair_stylist}}</h5>
				<h5 style="color: rgba(100,100,100,0.5)">{{x.address1}},{{x.address2}}</h5>
				<ul class="list-group bb3">
	  			<li class="list-group-item bb" >
	  			<div class="col-md-6 bb2 col-sm-12 col-xs-12" >{{x.service1}}</div>
	  			<div class="col-md-6 col-sm-12 col-xs-12">
	  			<div class="col-md-4 col-sm-4 col-xs-4 mistake" style="color: rgba(100,100,100,0.5); ">60 min</div>
	  			<div class="col-md-4 col-sm-4 col-xs-4 mistake" style="color: rgba(100,100,100,0.5">600/-</div>
	  			<div class="col-md-4 col-sm-4 col-xs-4 mistake" ><input type="button" value="Book" name="book" class="btn-primary"></div>
	  			</div>
	  			</li>
	 			<li class="list-group-item bb" >
	 			<div class="col-md-6 bb2 col-sm-12 col-xs-12">{{x.service2}}</div>
	  			<div class="col-md-6 col-sm-12 col-xs-12">
	  			<div class="col-md-4  col-sm-4 col-xs-4 mistake" style="color: rgba(100,100,100,0.5)">70 min</div>
	  			<div class="col-md-4 col-sm-4 col-xs-4 mistake" style="color: rgba(100,100,100,0.5)">1800/-</div>
	  			<div class="col-md-4 col-sm-4 col-xs-4 mistake"><input type="button" value="Book" name="book" class="btn-primary"></div>
	  			</div>
	 			</li>
	 			<li class="list-group-item bb" >
	 			<div class="col-md-6 bb2 col-sm-12 col-xs-12">{{x.service3}}</div>
	  			<div class="col-md-6 col-sm-12 col-xs-12">
	  			<div class="col-md-4 col-sm-4 col-xs-4 mistake" style="color: rgba(100,100,100,0.5)">90 min</div>
	  			<div class="col-md-4 col-sm-4 col-xs-4 mistake" style="color: rgba(100,100,100,0.5)">1600/-</div>
	  			<div class="col-md-4 col-sm-4 col-xs-4 mistake"><input type="button" value="Book" name="book" class="btn-primary"></div>
	  			</div>
	 			</li>
				</ul>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
<script>

	function capitalize(city)
	{
		return city[0].toUpperCase()+city.slice(1).toLowerCase();
	}

	$(document).ready(function(){
		$(".division").show();
	});

	$(".search_button").click(function(){
		var value;
		value=capitalize(document.getElementById('search').value);

		$(".division").hide();
		$("."+value).show();
	});

	$("#hairsalon").click(function(){
		var value;
		value=capitalize('haircut');

		$(".division").hide();
		$("."+value).show();
	});

	$("#hairstyle").click(function(){
		var value;
		value=capitalize('haircut');

		$(".division").hide();
		$("."+value).show();
	});

	

	$("#nailspa").click(function(){
		var value;
		value=capitalize('nailspa');

		$(".division").hide();
		$("."+value).show();
	});

	$("#bodyart").click(function(){
		var value;
		value=capitalize('bodyart');
		console.log("manthan");
		$(".division").hide();
		$("."+value).show();
	});

	$("#bridalmakeup").click(function(){
		var value;
		value=capitalize('bridalmakeup');

		$(".division").hide();
		$("."+value).show();
	});

	 $("#5star").click(function(){
            if($(this).prop("checked") == true){
                var value;
				value=capitalize('5');
				$(".division").hide();
				$("."+value).show();
            }
            
        });


	 $("#4star").click(function(){
            if($(this).prop("checked") == true){
                var value;
				value=capitalize('4');
				$(".division").hide();
				$("."+value).show();
            }
            
        });

	 $("#3star").click(function(){
            if($(this).prop("checked") == true){
                var value;
				value=capitalize('3');
				$(".division").hide();
				$("."+value).show();
            }
            
        });

	 $("#2star").click(function(){
            if($(this).prop("checked") == true){
                var value;
				value=capitalize('2');
				$(".division").hide();
				$("."+value).show();
            }
            
        });

	 $("#1star").click(function(){
            if($(this).prop("checked") == true){
                var value;
				value=capitalize('1');
				$(".division").hide();
				$("."+value).show();
            }
            
        });
</script>

<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope,$http) {
   $http.get('sample.php')
   .then(function (response) {$scope.names = response.data;});
});
</script>


<script>

function myMove() {
  var elem = document.getElementById("hh1");   
  var pos = -400;
  var id = setInterval(frame, 6	);
  function frame() {
    if (pos == 35) {
      clearInterval(id);
    } else {
      pos++; 
      elem.style.left = pos + "px"; 
    }
  }
}
</script>

<script>
	// var value;
	// value=document.getElementById('search').value;
	$(document).ready(function(){
		$(".division").show();

	});

	$(".search_button").click(function(){
		var value;
		value=document.getElementById('search').value;

		$(".division").hide();
		$("."+value).show();
	});
</script>
</html>