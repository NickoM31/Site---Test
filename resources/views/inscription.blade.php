<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>A Story Beats</title>
	<link rel="stylesheet" media="screen" href="{{ mix('/css/app.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
	
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top" id="menu">
			<h1 class="title"><a href="">A STORY BEATS</a></h1>
			<a href="" class="navbar-link" style="color:purple;">Home</a>
			<a href=""  class="popupHover" data-toggle="modal" data-target=".bd-example-modal-sm">Inscription</a>
			<a href="">
				<span class="genres-text">Genres</span>
				<span class="icon icon-slideout-down head-genre-icon"></span>
			</a>
			<a href="">About</a>
		</nav>
		<!-- carousel -->
		<div id="my_carousel" class="carousel slide" data-ride="carousel">
			<!-- Bulles -->
			<ol class="carousel-indicators">
				<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
				<li data-target="#my_carousel" data-slide-to="1"></li>
				<li data-target="#my_carousel" data-slide-to="2"></li>
			</ol>
			<!-- Slides -->
			<div class="carousel-inner">
				<!-- Page 1 -->
				<div class="item active">  
					<div class="carousel-page">
						<img src="/images/bootstrap.png" class="img-responsive" style="margin:0px auto;" />
					</div> 
					<div class="carousel-caption">Page 1 de présentation</div>
				</div>   
				<!-- Page 2 -->
				<div class="item"> 
					<div class="carousel-page"><img src="/images/twitter-bootstrap.jpg" class="img-responsive img-rounded" 
						style="margin:0px auto;"  /></div> 
						<div class="carousel-caption">Page 2 de présentation</div>
					</div>  
					<!-- Page 3 -->
					<div class="item">  
						<div class="carousel-page">
							<img src="/images/tablette.png" class="img-responsive img-rounded" 
							style="margin:0px auto;max-height:100%;"  />
						</div>  
						<div class="carousel-caption">Page 2 de présentation</div>
					</div>     
				</div>
				<!-- Contrôles -->
				<a class="left carousel-control" href="#my_carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#my_carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
			<!-- main -->
			<div class="pictures">

				<a href=""><h2>NEWZ</h2></a>
				<div class="row">
					<div class="col-md-3">
						<a href=""><img src="pictures/4.jpg" id="image" class="img-responsive" alt="Responsive image">Konyfer</a>
					</div>
					<div class="col-md-3">
						<a href=""><img src="pictures/3.jpg" id="image" class="img-responsive" alt="Responsive image">Konyfer</a>
					</div>
					<div class="col-md-3">
						<a href=""><img src="pictures/1.jpg" id="image" class="img-responsive" alt="Responsive image">Konyfer</a>
					</div>
					<div class="col-md-3">
						<div class="embed-responsive embed-responsive-4by3">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IvUU8joBb1Q" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<a href=""><img src="pictures/1.jpg" id="image" class="img-responsive" alt="Responsive image">Konyfer</a>
					</div>
					<div class="col-md-3">
						<a href=""><img src="pictures/3.jpg" id="image" class="img-responsive" alt="Responsive image">Konyfer</a>
					</div>
					<div class="col-md-3">
						<a href=""><img src="pictures/4.jpg" id="image" class="img-responsive" alt="Responsive image">Konyfer</a>
					</div>
					<div class="col-md-3">

					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<a href=""><img src="pictures/4.jpg" id="image" class="img-responsive" alt="Responsive image">Konyfer</a>
					</div>
					<div class="col-md-3">
						<a href=""><img src="pictures/1.jpg" id="image" class="img-responsive" alt="Responsive image">Konyfer</a>
					</div>
					<div class="col-md-3">
						<a href=""><img src="pictures/2.jpg" id="image" class="img-responsive" alt="Responsive image">Konyfer</a>
					</div>
					<div class="col-md-3">
					</div>
				</div>
			</div>

			<footer>
				<div class="rSocio">
					<a href=""><i class="fa fa-facebook-square fa-2x" aria-hidden="true"> </i></a>
					<a href=""><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
					<a href=><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
					<a href=><i class="fa fa-pinterest-square fa-2x" aria-hidden="true"></i></a>
				</div>
			</footer>
		</div>


		<script src="{{ mix('/js/app.js') }}"></script>
	</body>
	</html>