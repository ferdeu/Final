@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BudgetFork</title>

	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <style>
  body {
  background-image: url("");
  font-family: 'Lora';
  }
  .navbar.navbar-default.navbar-static-top{
    background-color: rgba(0, 0, 0, 1);
    color:white;
  }
  </style>
</head>

<body>

	<section class="features">
		<h3 class="title">Armamos una dieta ideal según tu presupuesto!</h3>
    <li class="banner"><img src="images/banner.jpg" alt="logotipo" class="banner">
    </li>

    <hr>
		<ul class="grid">
			<li>
				<i class="fa fa-camera-retro"></i>
				<h4>Compartí y conoce</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices vitae pulvinar velit.</p>
			</li>
			<li>
				<i class="fa fa-cubes"></i>
				<h4>Unite a nuestra comunidad</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices vitae pulvinar velit.</p>
			</li>
			<li>
				<i class="fa fa-newspaper-o"></i>
				<h4>Conoce nuestras recetas!</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices vitae pulvinar velit.</p>
			</li>
		</div>
	</section>

	<section class="contact">
    <hr>
    <h3 class="title">¿Preguntas o sugerencias? Nos encantaría escucharte.</h3>
		<form>
			<input type="email" placeholder="Email">
			<a href="#" class="btn">Contactanos!</a>
		</form>
	</section>

	<footer>
		<ul>
      <li><a href="#">BudgetFork<i class="fa fa-bfork-square"></i></a></li>
			<li><a href="#">Twitter<i class="fa fa-twitter-square"></i></a></li>
			<li><a href="#">Facebook<i class="fa fa-facebook-square"></i></a></li>
			<li><a href="#">Youtube<i class="fa fa-youtube-square"></i></a></li>
		</ul>
	</footer>
</body>
</html>
@endsection
