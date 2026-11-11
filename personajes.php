
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes - CultuSanGil</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f0e4;
            color: #3d3528;
        }

        header {
            background-color: #285943;
            color: white;
            padding: 25px;
            text-align: center;
        }

        header h1 {
            font-size: 32px;
            margin-bottom: 8px;
        }

        nav {
            background-color: #b58b45;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            color: #285943;
        }

        .presentacion {
            text-align: center;
            padding: 40px 20px;
        }

        .presentacion h2 {
            color: #285943;
            font-size: 30px;
            margin-bottom: 15px;
        }

        .presentacion p {
            max-width: 800px;
            margin: auto;
            line-height: 1.7;
            font-size: 17px;
        }

        .contenedor {
            max-width: 1150px;
            margin: auto;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .tarjeta {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.12);
            transition: transform 0.3s;
        }

        .tarjeta:hover {
            transform: translateY(-6px);
        }

        .tarjeta img {
            width: 100%;
            height: 230px;
            object-fit: cover;
        }

        .contenido {
            padding: 20px;
        }

        .contenido h3 {
            color: #285943;
            margin-bottom: 10px;
            font-size: 21px;
        }

        .contenido p {
            line-height: 1.6;
            font-size: 15px;
        }

        footer {
            background-color: #285943;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 25px;
            }

            nav a {
                display: inline-block;
                margin: 7px;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>CultuSanGil</h1>
    <p>Historia, cultura e identidad sangileña</p>
</header>

<nav>
    <a href="index.php">Inicio</a>
    <a href="lugares.php">Lugares</a>
    <a href="personajes.php">Personajes</a>
    <a href="iniciar_sesion.php">Iniciar sesión</a>
    <a href="registro.php">Registrarse</a>
</nav>

<section class="presentacion">
    <h2>Personajes de San Gil</h2>

    <p>
        San Gil ha sido cuna de importantes personajes que han
        contribuido a la historia, la cultura, el deporte, el arte
        y la sociedad colombiana. Conoce algunas de las personas
        que han dejado en alto el nombre de nuestra tierra.
    </p>
</section>

<section class="contenedor">

    <div class="tarjeta">
        <img src="img/pedro_fermin.jpg"
             alt="Pedro Fermín de Vargas">

        <div class="contenido">
            <h3>Pedro Fermín de Vargas</h3>
            <p>
                Fue un destacado economista, naturalista y escritor
                nacido en San Gil. Participó en la Expedición
                Botánica y aportó ideas importantes para el
                pensamiento económico y social de Colombia.
            </p>
        </div>
    </div>

    <div class="tarjeta">
        <img src="img/carlos_martinez.jpg"
             alt="Carlos Martínez Silva">

        <div class="contenido">
            <h3>Carlos Martínez Silva</h3>
            <p>
                Abogado, escritor, periodista y diplomático
                sangileño. Se destacó por su participación en
                la política colombiana y por sus aportes a la
                vida intelectual del país.
            </p>
        </div>
    </div>

    <div class="tarjeta">
        <img src="img/margalida_castro.jpg"
             alt="Margalida Castro">

        <div class="contenido">
            <h3>Margalida Castro</h3>
            <p>
                Actriz colombiana nacida en San Gil. Construyó
                una reconocida trayectoria en la televisión
                nacional y dejó una importante huella en las
                artes escénicas.
            </p>
        </div>
    </div>

    <div class="tarjeta">
        <img src="img/jorge_luis_pinto.png"
             alt="Jorge Luis Pinto">

        <div class="contenido">
            <h3>Jorge Luis Pinto</h3>
            <p>
                Entrenador de fútbol sangileño que ha dirigido
                diferentes equipos y selecciones nacionales.
                Es reconocido por su trayectoria en el fútbol
                colombiano e internacional.
            </p>
        </div>
    </div>

    <div class="tarjeta">
        <img src="img/luis_jose_rueda.jpg"
             alt="Luis José Rueda Aparicio">

        <div class="contenido">
            <h3>Luis José Rueda Aparicio</h3>
            <p>
                Religioso nacido en San Gil. Ha ocupado importantes
                cargos dentro de la Iglesia católica y fue nombrado
                cardenal de Colombia.
            </p>
        </div>
    </div>

    <div class="tarjeta">
        <img src="img/rito_rueda.jpg"
             alt="Rito Rueda Rueda">

        <div class="contenido">
            <h3>Rito Rueda Rueda</h3>
            <p>
                Abogado, historiador y escritor sangileño.
                Fue alcalde de San Gil y es reconocido por
                escribir la letra del himno de la ciudad.
            </p>
        </div>
    </div>

</section>

<footer>
    <p>© 2026 CultuSanGil - Conociendo nuestra historia y cultura</p>
</footer>

</body>
</html>
