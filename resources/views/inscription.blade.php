<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
	<div class="title">
		<h1>-A STORY BEATS-</h1>
	</div>
	<div class="container-fluid">

		<div class="form">
			<form class="form-inline">
				<div class="form-group">
					<label for="pseudo">Pseudo</label>
					<input type="text" name="pseudo" class="form-control" id="pseudo">
					<div class="form-group">
						<label class="sr-only" for="pass">Password</label>
						<input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
					</div>
					<div class="form-group">
						<label class="sr-only" for="confirmPass">Confirm Password</label>
						<input type="password" class="form-control" id="confirmPass" placeholder="Confirm" name="confirmPass">
					</div>
					<label class="sr-only" for="email">Email address</label>
					<input type="email" class="form-control" id="email" placeholder="Email" name="email">
				</div>
				<button type="submit" class="btn btn-default">Register</button>
			</form>
		</div>
		@foreach ($user as $value)
		<div>{{$value->id}}</div>
		@endforeach
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
	<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>