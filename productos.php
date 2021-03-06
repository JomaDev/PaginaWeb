<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap4.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/productos.css" />

  <title>SEREGRAL VENTAS</title>
</head>

<body>
  <div class="container-fluid bg-dark header-top d-none d-md-block">
    <div class="container">
      <div class="row text-light pt-2 pb-2">
        <div class="col-md-5">
          <i class="fa fa-envelope-o" aria-hidden="true"></i> ventas@seregral.com</div>
        <div class="col-md-3">

        </div>

        <div class="col-md-2">
          <i class="fa fa-user-o" aria-hidden="true"></i> Cuenta </div>
        <div class="col-md-2">
          <i class="fa fa-cart-plus" aria-hidden="true"></i> Carrito - $ 0.00</div>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-black">
    <nav class="container navbar navbar-expand-lg navbar-dark bg-black">
      <a class="navbar-brand" href="#">SEREGRAL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nosotros.html">Nosotros </a>
          </li>
          <li class="nav-item dropdown">
                        <div class="btn-group" style="display: block;">
                            <a class="nav-link dropdown-toggle-split" role="button" href="productos.php" data-toggle="dropdown">Productos</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">Proteccion Visual</a>
                                  <a class="dropdown-item" href="#">Proteccion Respiratoria</a>
                                  <a class="dropdown-item" href="#">Proteccion Auditiva</a>
                                  <a class="dropdown-item" href="#">Proteccion de Piel</a>
                                  <a class="dropdown-item" href="#">Proteccion Caidas</a>
                                  <a class="dropdown-item" href="#">Proteccion de Manos</a>
                                  <a class="dropdown-item" href="#">Proteccion de Cabeza</a>
                                  <a class="dropdown-item" href="#">Calzado Industrial</a>
                                  <a class="dropdown-item" href="#">Ropa de Seguridad</a>
                                  <a class="dropdown-item" href="#">Trafico Reflectivos</a>
                                  <a class="dropdown-item" href="#">Equipos de Emergencia</a>
                                </div>    
                        </div>   
                    </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html">Contacto</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>
  </div>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="img/casco1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>CASCO PROTECCIÓN</h3>
          <h4>Reserva tus nuevos cascos de protección!!!!!</h4>
          <input type="button" value="Mas Informacion" class="btn btn-primary">
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="img/casco2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block ">
          <h3>CASCO PROTECCIÓN 2</h3>
          <h4>Reserva tus nuevos cascos de protección!!!!!</h4>
          <input type="button" value="Mas Informacion" class="btn btn-primary">
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="img/ropa1.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h4>ROPA REFLECTANTE</h4>
          <h4>Reserva tu nueva ropa reflectante!!!!!</h4>
          <input type="button" value="Mas Informacion" class="btn btn-primary">
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
  <div class="row tablapro">
    <?php

    $connect = mysqli_connect('localhost', 'root', '', 'tienda');
    $query = 'SELECT * FROM products ORDER by id ASC';
    $result = mysqli_query($connect, $query);

    if ($result):
        if(mysqli_num_rows($result)>0):
            while($product = mysqli_fetch_assoc($result)):
            //print_r($product);
            ?>
            <div class="col-sm-4 col-md-3" >
                <form method="post" action="cart.php?action=add&id=<?php echo $product['id']; ?>">
                    <div class="products">
                        <img src="img/<?php echo $product['image']; ?>" class="img-fluid" />
                        <h4 class="text-info"><?php echo $product['name']; ?></h4>
                        <h4>$ <?php echo $product['price']; ?></h4>
                        <!--<input type="text" name="quantity" class="form-control" value="1" />-->
                        <input type="hidden" name="name" value="<?php echo $product['name']; ?>" />
                        <input type="hidden" name="price" value="<?php echo $product['price']; ?>" />
                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success"
                               value="Leer Mas..." />
                    </div>
                </form>
            </div>
            <?php
            endwhile;
        endif;
    endif;   
    ?>     
    </div>

  <footer>
    <div class="container-fluid pt-5 pb-5 bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="row">
                        <h5>Dirección</h5>
                    </div>
                    <div class="row mb-4">
                        <div class="underline bg-light" style="width: 90px;"></div>
                    </div>
                    <p>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i> Cercado - Arequipa</p>
                    <p>
                        <i class="fa" aria-hidden="true"></i> Av. Jorge Chavez 303</p>
                    <p>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i> Telefonos</p>
                    <p>
                        <i class="fa" aria-hidden="true"></i> 990047766 - 986089670</p>
                    <p>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i> Escribenos</p>
                    <p>
                        <i class="fa" aria-hidden="true"></i> ventas@seregral.com</p>

                </div>

                <div class="col-md-3">
                    <div class="row">
                        <h5>Recent Posts</h5>
                    </div>
                    <div class="row mb-4">
                        <div class="underline bg-light" style="width: 120px;"></div>
                    </div>
                    <div class="row">
                        <div class="media">
                            <img src="img/casco1.jpg" class="img-fluid" alt="media-image">
                            <div class="media-body ml-2">
                                <h6>Jackets For The Soul. What Color Is Yours?</h6>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="media">
                            <img src="img/casco2.jpg" class="img-fluid" alt="media-image">
                            <div class="media-body ml-2">
                                <h6>Best Fabrics For Your Dream Dress!</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <h5>Mapa del Sitio</h5>
                    </div>
                    <div class="row mb-4">
                        <div class="underline bg-light" style="width: 130px;"></div>
                    </div>
                    <button class="btn btn-outline-light btnmarg">Protección Visual</button>
                    <button class="btn btn-outline-light btnmarg">Proteccion Respiratoria</button>
                    <button class="btn btn-outline-light btnmarg">Proteccion de Piel</button>
                    <button class="btn btn-outline-light btnmarg">Proteccion Auditiva</button>
                    <button class="btn btn-outline-light btnmarg">Proteccion Caidas</button>
                    <button class="btn btn-outline-light btnmarg">Proteccion de Manos</button>
                    <button class="btn btn-outline-light btnmarg">Proteccion de Cabeza</button>
                    <button class="btn btn-outline-light btnmarg">Calzado Industria</button>
                    <button class="btn btn-outline-light btnmarg">Ropa de Seguridad</button>
                    <button class="btn btn-outline-light btnmarg">Trafico Reflectivos</button>
                    <button class="btn btn-outline-light btnmarg">Equipos de Emergencia</button>

                </div>
            </div>
        </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
    crossorigin="anonymous"></script>
</body>

</html>