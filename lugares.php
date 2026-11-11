
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lugares | CultuSanGil</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f0e3;
            color: #333;
        }

        /* ENCABEZADO */

        header {
            background-color: #34583d;
            color: white;
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .logo {
            font-size: 28px;
            color: #f0d99b;
            font-weight: bold;
        }

        nav {
            display: flex;
            gap: 22px;
            flex-wrap: wrap;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        nav a:hover {
            color: #e9cf8b;
        }

        /* PORTADA */

        .portada {
            background:
                linear-gradient(rgba(0,0,0,0.55),
                rgba(0,0,0,0.55)),
                url('img/turismo.jpg');

            background-size: cover;
            background-position: center;
            min-height: 350px;

            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px;
            color: white;
        }

        .portada h1 {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .portada p {
            font-size: 18px;
            max-width: 650px;
            line-height: 1.6;
        }

        /* INTRODUCCIÓN */

        .introduccion {
            text-align: center;
            padding: 55px 20px 30px;
        }

        .introduccion h2 {
            color: #34583d;
            font-size: 30px;
            margin-bottom: 15px;
        }

        .introduccion p {
            max-width: 750px;
            margin: auto;
            line-height: 1.7;
            color: #555;
        }

        /* TARJETAS */

        .lugares {
            padding: 35px 7% 65px;
            display: grid;
            grid-template-columns:
                repeat(auto-fit, minmax(240px, 1fr));
            gap: 28px;
        }

        .tarjeta {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.12);
            transition: transform 0.3s;
        }

        .tarjeta:hover {
            transform: translateY(-7px);
        }

        .tarjeta img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .contenido {
            padding: 22px;
        }

        .contenido h3 {
            color: #34583d;
            font-size: 21px;
            margin-bottom: 12px;
        }

        .contenido p {
            color: #555;
            line-height: 1.6;
            font-size: 14px;
            margin-bottom: 18px;
        }

        .boton {
            display: inline-block;
            background-color: #34583d;
            color: white;
            padding: 10px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
        }

        .boton:hover {
            background-color: #927746;
        }

        /* MENSAJE FINAL */

        .mensaje {
            background-color: #e2dfc9;
            text-align: center;
            padding: 45px 20px;
        }

        .mensaje h2 {
            color: #34583d;
            margin-bottom: 12px;
        }

        .mensaje p {
            color: #555;
            line-height: 1.6;
        }

        /* PIE DE PÁGINA */

        footer {
            background-color: #34583d;
            color: white;
            text-align: center;
            padding: 22px;
            font-size: 14px;
        }

        /* RESPONSIVE */

        @media (max-width: 600px) {

            header {
                justify-content: center;
                text-align: center;
            }

            nav {
                justify-content: center;
            }

            .portada h1 {
                font-size: 32px;
            }

            .portada p {
                font-size: 15px;
            }
        }

    </style>
</head>

<body>

    <!-- ENCABEZADO -->

    <header>

        <div class="logo">CultuSanGil</div>

        <nav>
            <a href="index.php">Inicio</a>
            <a href="lugares.php">Lugares</a>
            <a href="iniciar_sesion.php">Iniciar sesión</a>
            <a href="registro.php">Registrarse</a>
        </nav>

    </header>


    <!-- PORTADA -->

    <section class="portada">

        <div>
            <h1>Lugares de San Gil</h1>

            <p>
                Descubre los rincones más representativos
                de nuestro municipio, sus paisajes,
                naturaleza, historia y riqueza cultural.
            </p>
        </div>

    </section>


    <!-- INTRODUCCIÓN -->

    <section class="introduccion">

        <h2>Explora San Gil</h2>

        <p>
            San Gil, Santander, es un municipio lleno de
            historia, tradición y belleza natural. Conoce
            algunos de sus lugares más representativos y
            descubre por qué es uno de los destinos turísticos
            más importantes de Colombia.
        </p>

    </section>


    <!-- LUGARES TURÍSTICOS -->

    <section class="lugares">

        <div class="tarjeta">

            <img src="img/gallineral.jpg"
                 alt="Parque El Gallineral">

            <div class="contenido">

                <h3>Parque El Gallineral</h3>

                <p>
                    Un hermoso espacio natural reconocido
                    por sus árboles cubiertos de musgo,
                    sus senderos y sus paisajes junto al río.
                </p>

                <a class="boton"
                   href="https://www.google.com/maps/search/?api=1&query=Parque+El+Gallineral+San+Gil">
                    Ver ubicación
                </a>

            </div>
        </div>


        <div class="tarjeta">

            <img src="img/parque_libertad.jpg"
                 alt="Parque La Libertad">

            <div class="contenido">

                <h3>Parque La Libertad</h3>

                <p>
                    Es uno de los espacios tradicionales
                    del municipio. Un lugar de encuentro
                    para habitantes y visitantes.
                </p>

                <a class="boton"
                   href="https://www.google.com/maps/search/?api=1&query=Parque+La+Libertad+San+Gil">
                    Ver ubicación
                </a>

            </div>
        </div>


        <div class="tarjeta">

            <img src="img/catedral.jpg"
                 alt="Catedral Santa Cruz">

            <div class="contenido">

                <h3>Catedral Santa Cruz</h3>

                <p>
                    Un importante referente religioso
                    y arquitectónico que forma parte
                    del patrimonio histórico de San Gil.
                </p>

                <a class="boton"
                   href="https://www.google.com/maps/search/?api=1&query=Catedral+Santa+Cruz+San+Gil">
                    Ver ubicación
                </a>

            </div>
        </div>


        <div class="tarjeta">

            <img src="img/pozo_azul.jpeg"
                 alt="Pozo Azul">

            <div class="contenido">

                <h3>Pozo Azul</h3>

                <p>
                    Un atractivo natural rodeado de
                    vegetación, conocido por sus aguas
                    y sus paisajes naturales.
                </p>

                <a class="boton"
                   href="https://www.google.com/maps/search/?api=1&query=Pozo+Azul+San+Gil+Santander">
                    Ver ubicación
                </a>

            </div>
        </div>

    </section>


    <!-- MENSAJE FINAL -->

    <section class="mensaje">

        <h2>¡San Gil te espera!</h2>

        <p>
            Vive la experiencia de conocer nuestra historia,
            disfrutar nuestros paisajes y descubrir
            la riqueza cultural de nuestra tierra.
        </p>

    </section>


    <!-- PIE DE PÁGINA -->

    <footer>

        <p>
            © 2026 CultuSanGil -
            Historia, cultura y tradición de San Gil, Santander.
        </p>

    </footer>

</body>
</html>
