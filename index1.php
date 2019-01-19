<!DOCTYPE html>
<html>
<head>
<title>Learn Bootstrap</title>
<meta charset="utf-8">
<meta name="viewport" content="width:device-width, initial-scale=1, shrink-to-fit=no">
<script src="float-panel.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="style1.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner>.item>img{
	  height:400px !important;
  }
  </style>
</head>
<body id="page" data-spy="scroll" data-target=".navbar" data-offset="80"><!--1.we use id="page" for link it with a href="#page"   
		2.data-spy="srcoll" we use data-spy="sroll" as scrollable area(often this is body element) and this work for srollable id sections
		3.data-target=".navbar" we add data-target attribute with a value of id or class of navbar to make sure that navbar is connected with the srollable area and that scrollable element must match the id of link inside the navbar'list Ex-in this page link of li list "#section2" match the id of about secton id ="section2".
		4.data-offset="60" this is optional attribute that specifies the numbers of pixels to offset from top when calculating the position od the scroll.this is useful when you feel that the links inside the navbar changes the active state too soon or too late when jumping to srollable area by default data-offset is 10 pixels. !-->
<nav class="navbar navbar-default  navbar-fixed-top">  <!---1. For create a standard navbar we add class="navbar" with nav tag 
		2. if we use navbar-inverse instead of navbar-default ,then color of navbar by default  will be black and navbar-default color is white.
		3.navbar-fixed-top:- We use navbar-fixed-top with nav tag for fixed navbars!-->
	<div class="container">
		<div class="navbar-header"> <!--we use navbar-header class in a division to wrap up navbar-brand and toggle-button of menu !-->
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><!--1.button is used for button 
			  2.navbar-toggle:- used with our collapse plugin and other behaviour 
			  3.dtat-toggle="collapse" to control show/hide the collapsible content we use this attribute to anchor tag or button .
			  4.data-target="#myNavbar":-this attribute connect the button or link with the collapsiable content .
		      
			  -->
			<span class="icon-bar"></span><!--1.span:-span tag is used to group inline -elements in a document this tag provide no visual chamg by itself. -->
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
			<span class="icon-bar"></span>                        
		  </button>
		  <a class="navbar-brand" href="#Page">BOOTSTRAP</a><!--1.class="navbar-brand":-this is used for company ,product and project name-->
		</div>
		<div class="collapse navbar-collapse" id="myNavbar" ><!--1.class="collapse navbar-collapse":-this class is used for grouping and hiding content by a parent breakpoint.
		2.id="myNabvar":-this is used for button onlink showable area-->
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#section1">HOME</a><li>
				<li><a href="#section2">ABOUT</a><li>
				<li><a href="#section3">SERVICES</a><li>
				<li><a href="#section4">PORTFOLIO</a><li>
				<li><a href="#section5">PRICING</a><li>
				<li><a href="#section6">CONTACT</a><li>
			</ul>
		</div>
	</div>
</nav>
<div id="section1" class="jumbotron text-center">
	<h1>BOOTSTRAP</h1>
	<p>This JavaScript code to your website theme and make sure jQuery is used.
		The script checks the height position on every page scroll and fades in the widget if it has reached the 100px limit while another event listener detects the button clicks and smoothly scrolls back to the top of the page.</p>
		<form>
			<div class="input-group">
			<input type="text" class="form-control" placeholder="serach here.....">
			<span class="input-group-btn">
				<div class="btn btn-success">
					<span class="glyphicon glyphicon-search">
				</div>
			</span>
			</div>
		</form>
</div>
<div id="section2" class="container-fluid contain">
	<div class="row">
		<div class="col-sm-8">
			<h2>ABOUT BOOTSTRAP</h2>
			<h4>he navigation bar often takes up too much space on a small screen.We should hide the navigation bar; and only show it when it is needed.
				In the following example the navigation bar is replaced by a button in the top right corner. Only when the button is clicked, the navigation bar will be displayed
			</h4><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br>
			<div class="btn btn-primary btn-lg">Get In Touch
			</div>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-signal logo1 "></span>
		</div>
	</div>
</div>
<div class="container-fluid contain bg-grey">
	<div class="row">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-globe logo1 slide"></span>
		</div>
		<div class="col-sm-8">
			<h2>OUR VALUS</h2>
			<h4><strong>MISSION:</strong>Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
			<p><strong>VISION:</strong>Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
	</div>
</div>
<div  id="section3" class="container-fluid contain text-center">
	<h2>OUR SERVICES</h2>
	<h4>What We Offer</h4><br>
	<div class="row slide">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-off logo2"></span>
			<h4>POWER</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-heart logo2"></span>
			<h4>LOVE</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-lock logo2"></span>
			<h4>JOB DONE</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
	</div>
	<div class="row slide">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-leaf logo2"></span>
			<h4>GREEN</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-certificate logo2"></span>
			<h4>CERTIFICATE</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-wrench logo2"></span>
			<h4>HARD WORK</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
	</div>

</div>
<div id="section4" class="container-fluid contain text-center bg-grey">
	<div class="row text-center slide">
		<h2>PORTFOLIO</h2>
		<h4>We have created</h4><br>
		<div class="col-sm-4">
			<div class="thumbnail">
				<img src="img/things-tri4.jpg"  alt="Paris" width="400" height="300">
				<p>TRIVANDRUM</p>
			<p>Lorem ipsum dolor sit amet..</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="thumbnail">
			<img src="img/things-tri4.jpg"  alt="Paris" width="400" height="300">
			<p>TRIVANDRUM</p>
			<p>Lorem ipsum dolor sit amet..</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="thumbnail">
			<img src="img/things-tri4.jpg"  alt="Paris" width="400" height="300">
			<p>TRIVANDRUM</p>
			<p>Lorem ipsum dolor sit amet..</p>
			</div>
		</div>
	</div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
	  <img src="img/alleppey1.jpg" width="100%" height="300px">
	  <div class="carousel-caption">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
	  </div>
      </div>
      <div class="item">
	  <img src="img/allepey4.jpg" width="100%" height="300px">
	  <div class="carousel-caption">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
	  </div>
      <div class="item">
	  <img src="img/allepey7.jpg" width="100%" height="300px">
	  <div class="carousel-caption">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div id="section5" class="container-fluid contain text-center">
	<div class="row text-center">
		<h2>PRICING</h2>
		<h4>Choose a payment plan that works for you</h4><br>
		<div class="col-sm-4 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Basic</h4>
				</div>
				<div class="panel-body">
				  <p><strong>20</strong> Lorem</p>
				  <p><strong>15</strong> Ipsum</p>
				  <p><strong>5</strong> Dolor</p>
				  <p><strong>2</strong> Sit</p>
				  <p><strong>Endless</strong> Amet</p>
				</div>
				<div class="panel-footer">
				<h3>$19</h3>
				  <h4>per month</h4>
				  <button class="btn btn-lg">Sign Up</button>
				</div>
			</div>
		</div>
		<div class="col-sm-4 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Pro</h4>
				</div>
				<div class="panel-body">
				  <p><strong>20</strong> Lorem</p>
				  <p><strong>15</strong> Ipsum</p>
				  <p><strong>5</strong> Dolor</p>
				  <p><strong>2</strong> Sit</p>
				  <p><strong>Endless</strong> Amet</p>
				</div>
				<div class="panel-footer">
				<h3>$29</h3>
				  <h4>per month</h4>
				  <button class="btn btn-lg">Sign Up</button>
				</div>
			</div>
		</div>
		<div class="col-sm-4 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Permium</h4>
					</div>
					<div class="panel-body">
					  <p><strong>20</strong> Lorem</p>
					  <p><strong>15</strong> Ipsum</p>
					  <p><strong>5</strong> Dolor</p>
					  <p><strong>2</strong> Sit</p>
					  <p><strong>Endless</strong> Amet</p>
					</div>
					<div class="panel-footer">
					<h3>$39</h3>
					  <h4>per month</h4>
					  <button class="btn btn-lg">Sign Up</button>
					</div>
				</div>
		</div>
	</div>
</div>

<div class="container-fluid contain bg-grey" id="section6">
	<h2 class="text-center">CONTACT</h2>
	<div class="row slide">
		<div class="col-sm-5">
			<p>Contact us and we'll get back to you within 24 hours.</p>
			<p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
			<p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
			<p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
		</div>
		<div class="col-sm-7">
			<div class="col-sm-6 form-group">
				<input type="text" class="form-control" placeholder="NAME" >
			</div>
			<div class="col-sm-6 form-group">
				<input type="text" class="form-control" placeholder="EMAIL" >
			</div>
			<div class="col-sm-12 form-group">
				<textarea  class="form-control" placeholder="COMMENT" ></textarea>
			</div>
		</div>
		<div class="text-center form-froup">
			<button class="btn btn-success" style="margin-bottom:1%">Submit</button>
		</div>
	</div>
</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.496150101524!2d77.37578251425909!3d28.61488849163189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb362d98cd53%3A0x9484dae67d68cdb7!2sJustgoweb+Digtial!5e0!3m2!1sen!2sin!4v1545081521695" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen class="slide"></iframe>
<footer class="container-fluid contain text-center">
	<a href="#page">
	<span class="glyphicon glyphicon-chevron-up"></span>
	</a>
	<p>develope by <a href="https://www.justgoweb.com/">justgoweb</a></p>
</footer>
</body>
</html>