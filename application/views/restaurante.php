<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ko'ten Janal</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Linden+Hill:ital@0;1&family=Playball&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Barra de navegación e Inicio -->
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar">
                <div class="container-md">
                    <img class="logo text-white" src="imagenes/logo_2.png" alt="Logo Ko'ten Janal">
                    <ul class="nav left-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#menu">Menú</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#reservaciones">Reservaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="fondo">
                <section class="Inicio col-6">
                    <h1 class="Bienvenida">Bienvenido a Ko'ten Janal</h1>
                    <p class="descripcion"> 
                        La historia mexicana se cuenta de muchas formas, y una de 
                        las más auténticas es a través de su comida. Cada platillo es 
                        una obra maestra que representa el esfuerzo, la pasión y la 
                        alegría de ser mexicano. En cada bocado que pruebes, vas a 
                        sentir la tradición y el orgullo de nuestra tierra, una 
                        sensación que te transporta de vuelta a casa.
                    </p>
                </section>
            </div>
        </div>
    </div>
  
    <!-- Slide: Ofertas -->
    <div class="container-fluid">
        <h2 class="titulo_oferta col-2">Ofertas</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active" id="elipses"></li>
                <li data-target="#myCarousel" data-slide-to="1" id="elipses"></li>
                <li data-target="#myCarousel" data-slide-to="2" id="elipses"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="control_img carousel-inner">
                <div class="item active">
                    <img src="imagenes/promoo1.png" alt="promocion 1">
                </div>
                <div class="item">
                    <img src="imagenes/promoo2.png" alt="promocion 2">
                </div>
                <div class="item">
                    <img src="imagenes/promoo3.png" alt="promocion 3">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="control left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="control right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        
          <a class="control left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="control right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    
    <!-- Menu -->
    <div class="container-fluid" id="menu">
        <h2 class="titulo_menu col-2">Menú</h2> 
        <div class="row">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="cuadro col-4">
                    <div class="cardi">
                        <img class="card-img-top" src="imagenes/platillo.png" alt="imagen de comida">
                        <div class="card-body">
                            <h3 class="titulo">Platillos</h3>
                            <p class="descripcion-comida">
                                Ofrecemos una variedad de platillos 
                                tradicionales como tacos, enchiladas, mole 
                                y pozole, cada uno preparado con recetas 
                                que se han transmitido de generación en
                                generación. También exploramos fusiones 
                                modernas que mantienen la esencia de la
                                cocina mexicana.
                            </p>
                            <div class="boton-ver">
                                <button type="button" class="btn_menu btn-light"><h4>Ver más</h4></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cuadro col-4">
                    <div class="cardi">
                        <img class="card-img-top" src="imagenes/horchata.png" alt="imagen de bebida">
                        <div class="text-justify">
                            <h3 class="titulo">Bebidas</h3>
                            <p class="descripcion-comida">
                                No solo la comida, sino también las
                                bebidas son esenciales. Servimos opciones
                                tradicionales como aguas frescas, horchata, 
                                y una selección de tequilas y mezcales que
                                acompañan perfectamente nuestra oferta
                                gastronómica.
                            </p>
                            <div class="boton-ver">
                                <button type="button" class="btn_menu btn-light"><h4>Ver más</h4></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cuadro col-4">
                    <div class="cardi">
                        <img class="card-img-top" src="imagenes/postres.png" alt="imagen de postre">
                        <div class="card-body">
                            <h3 class="titulo">Postres</h3>
                            <p class="descripcion-comida">
                                La sección de postres es una celebración
                                de la dulzura y la creatividad de la 
                                gastronomía mexicana. Creemos que los postres 
                                son el cierre perfecto para una 
                                comida, brindando una experiencia 
                                que deleita tanto al paladar como a la 
                                vista.
                            </p>
                            <div class="boton-ver">
                                <button type="button" class="btn_menu btn-light"><h4>Ver más</h4></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Reservaciones -->
    <div class="container-fluid" id="reservaciones">
        <div class="row">
            <div class="reservaciones">
                <section class="col-12">
                    <div class="Reservacion_Img">
                        <img src="imagenes/reserva.png" alt="Imagen_Reservaciones">
                    </div>
                    <h2 class="tit_reserva col-3"><u>Reservaciones</u></h2>
                    <h3 class="Reservacion_Nom col-3 offset-1">COMIDA MEXICANA</h3>
                    <p class="Reservacion_text col-3 offset-1">  
                        En Ko'ten Janal, queremos asegurarnos de que 
                        tu visita sea especial. Reserva fácilmente tu 
                        mesa en línea y disfruta de nuestros exquisitos 
                        platillos en el horario que más te convenga.
                    </p>
                    <div class="boton-ver">
                        <button type="button" class="btn_reservar btn-light"><h5>Reservar</h5></button>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Eventos y Avisos -->
    <div class="container-fluid">
        <div class="row">
            <div class="eventos">
                <section>
                    <h2 class="titulo-evento">EVENTOS Y AVISOS</h2>
                </section>
            </div>
            <div>
                <p class="trad_eventos col-6 offset-3 text-white">Tradicionalmente celebramos en Ko’ten Janal...</p>
                <p class="descripcion_eventos col-8 text-white">
                    Un ambiente acogedor y festivo, donde cada evento se convierte en una experiencia inolvidable. 
                    Además, contamos con opciones personalizadas para menús y decoraciones que reflejan la 
                    esencia de tu celebración.
                </p>
                <p class="descripcion_eventos col-8 text-white">
                Momentos únicos que reúnen a amigos y seres queridos en torno a la deliciosa y colorida comida 
                mexicana. Nuestro restaurante es el espacio perfecto para celebrar cualquier evento.
                </p> 
            </div>
            
        </div>
    </div>

    <!-- Galeria -->
    <div class="container-fluid">
        <div class="row">
            <div>
                <section class="col-2">
                    <h2 class="titulo-Galeria">Galería</h2>
                </section>
            </div>
            <div class="text-center">
               <p class="descripcion_Galeria col-10 text-white">
               ¿Quieres saber qué te espera? Sumérgete en nuestra galería 
               y descubre la combinación perfecta entre tradición, sabor y 
               un espacio diseñado para disfrutar.
                </p>
                <p class="desc_Galeria col-7 text-white">
                Nuestro restaurante combina lo mejor del diseño contemporáneo 
                con un toque tradicional, creando un espacio único para tus 
                comidas.
                </p> 
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div>
                <div class="text-center">
                    <img src="imagenes/gale1.png" class="Galeria_Img_Model1" alt="Imagen de la galeria (1)">
                    <img src="imagenes/gale2.png" class="Galeria_Img_Model1" alt="Imagen de la galeria (2)">
                </div>
                <div class="text-center">
                    <img src="imagenes/gale3.png" class="Galeria_Img_Model2" alt="Imagen de la galeria (3)">
                    <img src="imagenes/gale4.png" class="Galeria_Img_Model2" alt="Imagen de la galeria (4)">
                    <img src="imagenes/gale5.png" class="Galeria_Img_Model2" alt="Imagen de la galeria (5)">
                    <img src="imagenes/gale6.png" class="Galeria_Img_Model2" alt="Imagen de la galeria (6)">
                </div>
            </div>
        </div>
    </div>

    <!-- Sobre Nosotros -->
    <div class="container-fluid">
        <div class="row">
            <div class="nosotros">
                <section class="col-12">
                    <div class="img-nosotros">
                        <img src="imagenes/nosotros.png">
                    </div>
                    <h2 class="titulo_sobre col-5">Sobre Nosotros</h2> 
                    <p class="desc-nosotros col-5 offset-6">
                        En Ko’ten Janal, creemos que los sabores tienen el poder de contar
                        historias, unir culturas y acompañarte en cada etapa de tu vida. Todos
                        cambiamos, evolucionamos y dejamos cosas atrás, pero hay algo que 
                        permanece: el sabor de lo que llevamos con nosotros. Como dice el 
                        dicho: “Eres lo que comes”.
                        <br><br>
                        ¿Puedes imaginar el sabor? apuesto a que sí. No necesitas pensarlo 
                        mucho antes de elegir tu platillo. Ya sea que vengas solo o acompañado,
                        con poca o mucha hambre, en Ko’ten Janal te aseguramos que te
                        irás satisfecho.
                    </p>
                </section>
            </div>
        </div>
    </div>

    <!-- Reseñas -->
    <div class="container-fluid">
        <h2 class="titulo_res col-2">Reseñas</h2> 
        <section>
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-2 center-block col-lg-4 col-sm-3">
                                <div class="res-nombres card border-white mb-3">
                                    <div class="card-header border-white">
                                        <p><img class="estrellas float-end" src="imagenes/5estrellas.svg" alt="5 estrellas"></p>
                                        <p class="text-white">@GastrónomoFeliz<br>
                                            Hace 2 semanas</p>
                                         </p>
                                    </div>
                                    <p class="res-desc card text-white">
                                        El ambiente en Ko'ten janal es 
                                        simplemente encantador. Cada
                                        rincón refleja la cultura local y 
                                        crea una experiencia única.
                                        ¡Definitivamente volveré!
                                    </p>
                                </div>
                            </div>
                            <div class="col-2 center-block col-lg-4 col-sm-3">
                                <div class="res-nombres card border-white">
                                    <div class="card-header border-white">
                                        <p><img class="estrellas float-end" src="imagenes/5estrellas.svg" alt="5 estrellas"></p>
                                        <p class="text-white">@SaborYTradición<br>
                                            Hace una semana</p>
                                        </p>
                                    </div>
                                    <p class="res-desc card text-white">
                                        Los platillos son una verdadera 
                                        delicia. Probé el mole y fue una 
                                        explosión de sabores. Se nota
                                        que utilizan ingredientes
                                        frescos y de alta calidad.
                                    </p>
                                </div>
                            </div>
                            <div class="col-2 center-block col-lg-4 col-sm-3">
                                <div class="res-nombres card border-white mb-3">
                                    <div class="card-header border-white">
                                        <p><img class="estrellas float-end" src="imagenes/5estrellas.svg" alt="5 estrellas"></p>
                                        <p class="text-white">@CulturaYComida<br>
                                            Hace una semana</p>
                                        </p>
                                    </div>
                                    <p class="res-desc card text-white">
                                        El personal fue muy atento y 
                                        servicial. Nos hicieron sentir
                                        como en casa desde el momento
                                        en que entramos. ¡Gracias por
                                        la gran noche!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-2 center-block col-lg-4 col-sm-3">
                                <div class="res-nombres card border-white mb-3">
                                    <div class="card-header border-white">
                                        <p><img class="estrellas float-end" src="imagenes/5estrellas.svg" alt="5 estrellas"></p>
                                        <p class="text-white">@GastroLover89<br>
                                            Hace 3 semanas</p>
                                        </p>
                                    </div>
                                    <p class="res-desc card text-white">
                                        ¡Simplemente increíble! 
                                        La auténtica comida mexicana en Ko'ten Janal me
                                        transportó a México. Los tacos al 
                                        pastor y el guacamole está fresco.
                                    </p>
                                </div>
                            </div>
                            <div class="col-2 center-block col-lg-4 col-sm-3">
                                <div class="res-nombres card border-white mb-3">
                                    <div class="card-header border-white">
                                        <p><img class="estrellas float-end" src="imagenes/4estrellas.svg" alt="4 estrellas"></p>
                                        <p class="text-white">@FoodieCritic21<br>
                                            Hace 3 días</p>
                                        </p>
                                    </div>
                                    <p class="res-desc card text-white">
                                        La comida en Ko'ten Janal es buena, 
                                        pero el servicio podría mejorar. Los
                                        platillos estaban sabrosos y la 
                                        presentación fue excelente, en particular el
                                        mole.
                                    </p>
                                </div>
                            </div>
                            <div class="col-2 center-block col-lg-4 col-sm-3">
                                <div class="res-nombres card border-white mb-3">
                                    <div class="card-header border-white">
                                        <p><img class="estrellas float-end" src="imagenes/5estrellas.svg" alt="5 estrellas"></p>
                                        <p class="text-white">@CulinaryAdventur<br>
                                            Hace 2 semanas</p>
                                        </p>
                                    </div>
                                    <p class="res-desc card text-white">
                                        Una experiencia maravillosa.
                                        El personal fue amable y servicial. Probé la enchilada 
                                        de pollo y estaba llena de sabor, y el flan de 
                                        postre fue el cierre perfecto.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="controles carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="controles2 carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="Coment">
                    <div class="col-2 col-lg-5 col-sm-3">
                        <h3 class="dejar_coment col-4 offset-1"> Deja un comentario para Ko’ten Janal</h3>
                        <div class="opinion col-5 offset-1">Tu opinión es importante como la de todo el
                            mundo, cuéntanos tu experiencia, cada opinión
                            nos ayuda a mejorar como restaurante.
                        </div>
                        <div class="boton1">
                            <button type="button" class="boton_sesion btn-outline-dark btn-lg">Registrar</button>
                            <button type="button" class="boton_sesion btn-outline-dark btn-lg">Iniciar Sesión</button>
                        </div>
                    </div>
                    <div class="calificacion col-6 col-lg-6 col-sm-6">
                        <spam class="text-left"> Califícanos:</spam>
                        <img class="" src="imagenes/estrellasBlanco.svg" alt="seleccion de estrellas">
                    </div>
                    <div class="col-6 col-lg-6 col-sm-6">
                        <form>
                            <textarea rows="5" cols="30" placeholder="Añadir un comentario..." class="txt_coment"></textarea><br><br>
                            <div class="enviar">
                                <input type="submit" class="btn_enviar btn-outline-dark btn-lg" value= "Enviar comentario">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Preguntas Frecuentes -->
    <div class="container">
        <div class="imagen">
            <img class="jaguar" src="imagenes/jaguar.png" alt="imagen de jaguar">
            <h2 class="preguntasfrecuentes"><u>Preguntas frecuentes</u></h2>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                        class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                        >
                        <p class="seccion">¿Tienen opciones vegetarías o veganas?</p>
                    </button>
                </h2>
                <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    data-bs-parent="#accordionExample"
                    style=""
                    >
                    <div class="accordion-body">
                        <strong class="respuestas">¡Si! Contamos con tacos de nopales, hongos y frijoles negros.</strong> 
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                        >
                        <p class="seccion"> ¿Qué tipos de tacos ofrecen?</p>
                    </button>
                </h2>
                <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                    >
                    <div class="accordion-body">
                        <strong class="respuestas">Ofrecemos una gran variedad, incluyendo clásicos como tacos al pastor, carnitas, 
                            pollo asado y hasta vegetarianos. También tenemos opciones especiales que cambian por temporadas.</strong> 
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                        >
                        <p class="seccion">¿Puedo personalizar mis tacos con diferentes complementos?</p>
                    </button>
                </h2>
                <div
                    id="collapseThree"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                    >
                    <div class="accordion-body">
                        <strong class="respuestas">¡Si! Puedes personalizar tus tacos eligiendo los complementos que más te gusten, 
                            como salsas con diferentes niveles de picante hasta guacamole casero, solo dínoslo al hacer tu pedido.</strong> 
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseFour"
                        aria-expanded="false"
                        aria-controls="collapseFour"
                        >
                        <p class="seccion">¿Es necesario hacer reservación?</p>
                    </button>
                </h2>
                <div
                    id="collapseFour"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                    >
                    <div class="accordion-body">
                        <strong class="respuestas">Para garantizar una experiencia agradable, especialmente durante los fines de semana 
                            y temporadas altas, te recomendamos hacer una reservación. Esto nos ayuda a asegurarte una mesa y a planificar 
                            mejor nuestro servicio. Si prefieres venir sin reservación, haremos nuestro mejor esfuerzo para acomodarte, 
                            pero puede que haya tiempos de espera. ¡Esperamos verte pronto!</strong> 
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseFive"
                        aria-expanded="false"
                        aria-controls="collapseFive"
                        >
                        <p class="seccion">¿Puedo celebrar un evento privado en su restaurante?</p>
                    </button>
                </h2>
                <div
                    id="collapseFive"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                    >
                    <div class="accordion-body">
                        <strong class="respuestas">¡Por supuesto! Nos encantaría ayudarte a celebrar tu evento privado. 
                            Contamos con espacios que se pueden adaptar para reuniones, fiestas y celebraciones especiales. 
                            Si tienes en mente una fecha o algún detalle específico, te invitamos a contactarnos para discutir las opciones 
                            disponibles y asegurarnos de que tu evento sea inolvidable. ¡Esperamos poder atenderte pronto!</strong> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Footer: Contacto-->
    <footer class="container-fluid  text-light py-4" id="contacto">
        <div class="row contact_todo">
            <div class="col-md-3">
                <h5 class="lucida">Direcciones</h5>
                <p class="direccion">Blvd. Kukulcan 61, La Isla,<br>Zona Hotelera, 77500<br>Cancún, Q.R.</p>
                <h5 class="lucida">Horarios</h5>
                <p class="direccion">Lunes - Viernes<br>8:00 - 21:00</p>
            </div>
            <div class="col-md-3">
                <h5 class="lucida">Contacto</h5>
                <p class="direccion">Teléfonos:</p>
                <p class="direccion">9967450789<br>9945672312<br>9934674505</p>
                <p class="direccion">Correo electrónico:<br></p><p class="direccion">Kotenjanal@gmail.com</p>
            </div>
            <div class="col-md-3">
                <h5 class="lucida">Redes Sociales</h5>
                <div class="iconos">
                    <a href="#">
                        <img class="text-light me-2" src="imagenes/face.svg" alt="">
                    </a>
                    <a href="#">
                        <img class="text-light me-2" src="imagenes/insta.svg" alt="">
                    </a>
                    <a href="#">
                        <img class="text-light" src="imagenes/twitter.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <h5 class="lucida">Ayuda</h5>
                <p class="direccion">Registro</p>
                <p class="direccion">Atención al cliente</p>
                <p class="direccion">Seguridad del usuario</p>
            </div>
            <div class="row mt-4 text-center reservados">
                <div class="col-md-4">
                    <small>&copy; 2024 | Todos los Derechos Reservados</small>
                </div>
                <div class="col-md-4">
                    <a href="#" class="text-light">Aviso de privacidad</a>
                </div>
                <div class="col-md-3 text-end">
                    <a href="#" class="text-light">Términos de uso del sitio web</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>  
</body>
</html>