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
            <h2>Catálogo</h2>
            <img src="img/Creaciones.png" width="150px" height="150px">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Comenzar a navegar</a>
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
                                <a class="nav-link" href="Preguntas.php">Preguntas frecuentes</a>
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

    <section id="catálogo">
        <div class="container">
            <h2>Productos</h2>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img\Muñeca.PNG" class="card-img-top" width="10px" height="500px">
                            <h5 class="card-title">Muñeca</h5>
                            <p class="card-text">Muñeca tejida hecha a mano a partir de la técnica de tejido, utilizando hilos, lana o fibras textiles.
                                Esta muñeca suele ser muy versátil en cuanto a su diseño y tamaño y pueden variar desde pequeñas figuras decorativas hasta muñecos de tamaño real.</p>
                                <p>Precio: </p>
                                <button class="btn btn-info" onclick="agregarAlCarrito(1)">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <img src="img\Girasoles.jpeg" class="card-img-top" width="10px" height="500px">
                        <h5 class="card-title">Girasoles</h5>
                        <p class="card-text">Flores en forma de girasol tejidas hechas a mano que imitan la apariencia de las flores de girasol utilizando técnicas de tejido.
                            Estas creaciones son populares en la decoración de interiores, en la confección de accesorios</p>
                        <p>Precio: </p>
                        <button class="btn btn-info" onclick="agregarAlCarrito(2)">Agregar al carrito</button>
                    </div>
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <img src="img\Rosas.jpeg" class="card-img-top">
                        <h5 class="card-title">Rosas</h5>
                        <p class="card-text">Florero de rosas tejidas que combina la belleza de las flores naturales con la artesanía de tejido a mano. 
                        Este tipo de arreglo floral es particularmente encantador y se distingue por su originalidad y elegancia.</p>
                    <p>Precio: </p>
                    <button class="btn btn-info" onclick="agregarAlCarrito(3)">Agregar al carrito</button>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <img src="img\Peluches.jpeg" class="card-img-top" width="10px" height="540px">
                        <h5 class="card-title">Peluches</h5>
                        <p class="card-text">Peluches tejidos de tela suave y mullida que se crean a partir de tejidos, como la lana, el algodón o el poliéster.
                        Estos adorables peluches son conocidos por su aspecto encantador y su textura reconfortante.</p>
                    <p>Precio: </p>
                    <button class="btn btn-info" onclick="agregarAlCarrito(4)">Agregar al carrito</button>
                    </div>
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <img src="img\Moana.PNG" class="card-img-top">
                        <h5 class="card-title">Moana</h5>
                        <p class="card-text">Muñeca</p>
                    <p>Precio: </p>
                    <button class="btn btn-info" onclick="agregarAlCarrito(5)">Agregar al carrito</button>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img\hojas.PNG" class="card-img-top" width="10px" height="505px">
                            <h5 class="card-title">Hojas</h5>
                            <p class="card-text">Muñecos en forma</p>
                            <p>Precio: </p>
                            <button class="btn btn-info" onclick="agregarAlCarrito(6)">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <img src="img/Frida.PNG" class="card-img-top">
                        <h5 class="card-title">Frida</h5>
                        <p class="card-text">TE</p>
                    <p>Precio: </p>
                    <button class="btn btn-info" onclick="agregarAlCarrito(7)">Agregar al carrito</button>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <img src="img\Diablito.PNG" class="card-img-top" width="10px" height="505px">
                        <h5 class="card-title">Diablito</h5>
                        <p class="card-text">Muñeco tejido</p>
                    <p>Precio: </p>
                    <button class="btn btn-info" onclick="agregarAlCarrito(8)">Agregar al carrito</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <img src="img/chubaca.PNG" class="card-img-top">
                        <h5 class="card-title">chubaca</h5>
                        <p class="card-text">Muñeco</p>
                    <p>Precio: </p>
                    <button class="btn btn-info" onclick="agregarAlCarrito(9)">Agregar al carrito</button>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <img src="img/Flores-capullo.PNG" class="card-img-top" width="10px" height="505px">
                        <h5 class="card-title">Flores capullo</h5>
                        <p class="card-text">Flores tejidas</p>
                    <p>Precio: </p>
                    <button class="btn btn-info" onclick="agregarAlCarrito(10)">Agregar al carrito</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <img src="img/Maceta.PNG" class="card-img-top">
                        <h5 class="card-title">Maceta</h5>
                        <p class="card-text">TE</p>
                    <p>Precio: </p>
                    <button class="btn btn-info" onclick="agregarAlCarrito(11)">Agregar al carrito</button>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <img src="img/Muñequitos.PNG" class="card-img-top" width="10px" height="505px">
                        <h5 class="card-title">Muñequitos</h5>
                        <p class="card-text">Muñecos tejidos</p>
                    <p>Precio: </p>
                    <button class="btn btn-info" onclick="agregarAlCarrito(12)">Agregar al carrito</button>
                    </div>
                    </div>
                </div>
            </div>
            <script>
                function agregarAlCarrito(idProducto) {
                // para agregar el producto al carrito y guardar la información.
                window.location.href = 'carrito.php?id=' + idProducto;
                }
            </script>
        
    </section><br>

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