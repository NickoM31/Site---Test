<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>A Story Beats</title>
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
	
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top" id="menu">
			<div class="container">
				<div class="title">
					<h1><a href="">-A STORY BEATS-</a></h1>
				</div>
				<a href="#" class="navbar-link" style="">Home</a>
				<a href="" data-toggle="modal" data-target=".bd-example-modal-sm">Inscription</a>
				<a href="">
					<span class="genres-text">Genres</span>
					<span class="icon icon-slideout-down head-genre-icon"></span>
				</a>

				<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="row">
								<div class="col-md-12" id="formAll">
									<div class="form">
										<form class="form">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
											</button>
											<div class="form-group">
												<label class="sr-only" for="pseudo">Pseudo</label>
												<input type="text" class="form-control" id="pseudo" placeholder="Pseudo" name="pass">
											</div>
											<div class="form-group">
												<label class="sr-only" for="pass">Password</label>
												<input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
											</div>
											<div class="form-group">
												<label class="sr-only" for="confirmPass">Confirm Password</label>
												<input type="password" class="form-control" id="confirmPass" placeholder="Confirm" name="confirmPass">
											</div>
											<div class="form-group">
												<label class="sr-only" for="email">Email address</label>
												<input type="email" class="form-control" id="email" placeholder="Email" name="email">
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-default">Register</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="col-md-8"></div>



		<div class="row">
			<div class="col-md-12">
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
								<img src="https://unsplash.it/458/354?image=1082" class="img-responsive" alt="Responsive image" class="img-responsive" style="margin:0px auto;" />
							</div> 
							<div class="carousel-caption">Old Skool</div>
						</div>   
						<!-- Page 2 -->
						<div class="item"> 
							<div class="carousel-page"><img src="https://unsplash.it/458/354?image=1075" class="img-responsive" alt="Responsive image" class="img-responsive img-rounded" 
								style="margin:0px auto;"  /></div> 
								<div class="carousel-caption">Street</div>
							</div>  
							<!-- Page 3 -->
							<div class="item">  
								<div class="carousel-page">
									<img src="https://unsplash.it/458/354?image=903" class="img-responsive" alt="Responsive image" class="img-responsive img-rounded" 
									style="margin:0px auto;max-height:100%;"  />
								</div>  
								<div class="carousel-caption">Trip</div>
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
				</div>
			</div>
		</div>

		<div class="pictures">

			<h2>NEWZ</h2>
			<div class="row">
				<div class="col-md-3">
					<img src="https://unsplash.it/458/354?image=1082" class="img-responsive" alt="Responsive image">Konyfer
				</div>
				<div class="col-md-3">
					<img src="https://unsplash.it/458/354?image=903" class="img-responsive" alt="Responsive image">Konyfer
				</div>
				<div class="col-md-3">
					<img src="https://unsplash.it/458/354?image=1075" class="img-responsive" alt="Responsive image">Konyfer
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IvUU8joBb1Q" frameborder="0" allowfullscreen></iframe>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<img src="https://unsplash.it/458/354?image=1082" class="img-responsive" alt="Responsive image">Konyfer
				</div>
				<div class="col-md-3">
					<img src="https://unsplash.it/458/354?image=903" class="img-responsive" alt="Responsive image">Konyfer
				</div>
				<div class="col-md-3">
					<img src="https://unsplash.it/458/354?image=1075" class="img-responsive" alt="Responsive image">Konyfer
				</div>
				<div class="col-md-3">

				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<img src="https://unsplash.it/458/354?image=1082" class="img-responsive" alt="Responsive image">Konyfer
				</div>
				<div class="col-md-3">
					<img src="https://unsplash.it/458/354?image=903" class="img-responsive" alt="Responsive image">Konyfer
				</div>
				<div class="col-md-3">
					<img src="https://unsplash.it/458/354?image=1075" class="img-responsive" alt="Responsive image">Konyfer
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