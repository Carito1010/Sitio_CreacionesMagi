<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/Creaciones.png">
    <title>Creaciones Magi</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <Center>
        <header>
        <div class="container">
            <h2>Carrito de compras</h2>
            <img src="img/Creaciones.png" width="150px" height="150px">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Barra de navegación</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="Principal.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Catálogo.php">Catálogo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Contacto.php">Contactanos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Carrito.php">Carrito</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Preguntas.php">Preguntas Frecuentes</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <a href="Registro.php"><input type="button" value="Registrarse" style="margin-right: 10px" class="btn btn-info"></a>
                            <a href="IniciarSesión.php"><input type="button" value="Iniciar Sesión" style="margin-right: 10px" class="btn btn-info"></a>
                        </form>

                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                            <button class="btn btn-info" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section id="carrito de compras">
        <div class="container">
                <h1>Carrito de Compras</h1>
                    <?php
                    if (isset($_GET['id'])) {
                        $productoID = $_GET['id'];
                        // Aquí, realizarías una consulta a una base de datos o usarías algún otro método para obtener información del producto.
                        // Luego, mostrarías el producto en el carrito.
                        echo "Producto agregado al carrito con ID: " . $productoID;
                    } else {
                        echo "El carrito está vacío";
                    }
                    ?>
    </section><br><br><br>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="Programadores" id="Programadores">
                        <div class="Escudo">
                            <img src="img/Logo_UNILA_-_Universidad_Latina.png" class="unila">
                            <p class="derechos"> &copy; Todos los derechos reservados</p>
                        </div>   
                    </div>
                </div>
                <div class="col">
                    <div class="equipo">
                        <h2><p>Univeridad Latina</p></h2>
                        <p>Materia: Creación de negocios de tecnología</p>
                        <p>Semestre: 7</p>
                        <p>Profesora: Laura Patricia Alonso Herrera</p>
                        <p>Integrantes: Corona Ruiz Cristian Fernando,<br>
                            Gallegos Vera Carolina,<br>
                            Martínez Márquez Mauricio,<br>
                            Morales Salinas Eduardo,<br>
                            Ontiveros Cuevas Juan Carlos,<br>
                            Sánchez Aparicio Engelver Gerson</p>
                        <p>Grupo: INF-7510</p>
                    </div>
                </div>
                <div class="col">
                    <div class="Redes">    
                        <br>
                        <div class="icono1">
                            <a href="https://es-la.facebook.com/"><img src="img/Facebu.png" class="Face"></a>
                        </div>
                        <div class="icono2">
                            <a href="https://www.instagram.com/"><img src="img/Insta.png" class="Insta"></a>
                        </div>                        
                        <div class="icono3">
                            <a href="https://wa.me/qr/TGIEWAURXDB7G1/"><img src="img/Wasap.png" class="Whats"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </Center>
</body>
</html>
</body>
</html>