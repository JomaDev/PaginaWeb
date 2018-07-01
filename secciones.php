<?php
    $m = new MongoClient();
    $produc = $m->selectCollection('alvaro','productos');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Productos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="Menu css/menu.css">
  <link rel="stylesheet" href="Archivos css/secciones.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="Archivos js/main.js"></script>
</head>
<body>
	<header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Menú</a>
		</div>
		<nav>
			<ul>
				<li><a href="index.html"><span class="icon-house"></span>Inicio</a></li>
				<li><a href="nosotros.html"><span class="icon-suitcase"></span>Nosotros</a></li>
				<li class="submenu">
					<a href="secciones.php"><span class="icon-rocket"></span>Productos<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="#">Terma Solar 1 <span class="icon-dot"></span></a></li>
						<li><a href="#">Terma Solar 2 <span class="icon-dot"></span></a></li>
						<li><a href="#">Terma Solar 3 <span class="icon-dot"></span></a></li>
						<li><a href="#">Terma Solar 4 <span class="icon-dot"></span></a></li>
					</ul>
				</li>
				<li><a href="contacto.html"><span class="icon-mail"></span>Contacto</a></li>
			</ul>
		</nav>
  </header>
  <section class="contenedor">
    <div class="columna">
       <?php 
        $prod=$produc->find();
        foreach($prod as $p){
            echo "
            <article>
                <h2>{$p['id']}</h2>
                <p>{$p['comentario']}</p>
            </article>";
        }
        ?>
        <article>
            <img src="Images/cascoybotas.jpg">
            <h2 class="info__titulo">Titulo 1</h2>
            <p class="info__txt">DESCRIPCCION RAPIDA</p>
       </article>
       <article>
            <img src="Images/cascoybotas.jpg">
            <h2 class="info__titulo">Titulo 1</h2>
            <p class="info__txt">DESCRIPCCION RAPIDA</p>
       </article>
    </div>
  </section>

</body>
</html>