<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Maevol</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;1,300&display=swap" rel="stylesheet"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<link rel="stylesheet" href="../styles/phphome.css">
</head>
<body>
	<section id="scroll" class="static">
			<nav>
				<div class="d-flex justify-content-center align-items-center">
                    <span> Hola, <?php echo $_SESSION['username']; ?>, ahora puedes disfrutar de nuestras ofertas</span>    
                    <span> <a href="index.php?logout='1'"">Salir del usuario</a></span>    
				</div>
			</nav>
	</section>

	<div class="precio">

			<div class="card p-4">
				<h1>Basico</h1>
				<img src="../img/free.jpg"/>
				<p class="price">$14.99 (5$ de descuento)</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus dolorum, eligendi exercitationem error id odit non rem voluptatum at. Repudiandae sit officia placeat inventore veritatis velit optio neque reiciendis mollitia!</p>
				<p><button>Comprar</button></p>
			</div> 
			<div class="card p-4">
				<h1>Normal</h1>
				<img src="../img/free1.jpg"/>
				<p class="price">$14.99 (5$ de descuento)</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus dolorum, eligendi exercitationem error id odit non rem voluptatum at. Repudiandae sit officia placeat inventore veritatis velit optio neque reiciendis mollitia!</p>
				<p><button>Comprar</button></p>
			</div> 
			<div class="card p-4">
				<h1>Premium</h1>
				<img src="../img/free3.jpg"/>
				<p class="price">$14.99 (5$ de descuento)</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus dolorum, eligendi exercitationem error id odit non rem voluptatum at. Repudiandae sit officia placeat inventore veritatis velit optio neque reiciendis mollitia!</p>
				<p><button>Comprar</button></p>
			</div> 
	</div>
	
	<footer class="descuento">	
		<div class="text-center ">
			<h3 class="blink_me"> Te quedan <span class="tiempo " id="countdown"></span> para que acabe la oferta. !DATE PRISA!</h3>
		</div>
	</footer>
<script src="/js/librerias.js"></script>
<script src="/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>
