
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar sesión | CultuSanGil</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #e9e2ce, #c5d2b8);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .contenedor {
            width: 100%;
            max-width: 420px;
            background-color: #fffdf5;
            padding: 40px 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h1 {
            color: #34583d;
            font-size: 30px;
        }

        .logo p {
            color: #927746;
            margin-top: 8px;
            font-size: 14px;
        }

        h2 {
            text-align: center;
            color: #34583d;
            margin-bottom: 25px;
        }

        .campo {
            margin-bottom: 20px;
        }

        .campo label {
            display: block;
            margin-bottom: 8px;
            color: #444;
            font-weight: bold;
        }

        .campo input {
            width: 100%;
            padding: 13px;
            border: 1px solid #c8c8b8;
            border-radius: 7px;
            outline: none;
            font-size: 15px;
        }

        .campo input:focus {
            border-color: #537c54;
        }

        .opciones {
            text-align: right;
            margin-bottom: 22px;
        }

        .opciones a {
            color: #537c54;
            text-decoration: none;
            font-size: 13px;
        }

        .btn-ingresar {
            width: 100%;
            padding: 14px;
            background-color: #34583d;
            color: white;
            border: none;
            border-radius: 7px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-ingresar:hover {
            background-color: #537c54;
        }

        .registro {
            text-align: center;
            margin-top: 25px;
            color: #555;
            font-size: 14px;
        }

        .registro a {
            color: #34583d;
            font-weight: bold;
            text-decoration: none;
        }

        .registro a:hover,
        .opciones a:hover {
            text-decoration: underline;
        }

        .volver {
            display: block;
            text-align: center;
            margin-top: 25px;
            color: #927746;
            text-decoration: none;
            font-size: 14px;
        }

        .volver:hover {
            color: #34583d;
        }
    </style>
</head>

<body>

    <div class="contenedor">

        <div class="logo">
            <h1>CultuSanGil</h1>
            <p>Descubre la historia y cultura de San Gil</p>
        </div>

        <h2>Iniciar sesión</h2>

        <form action="#" method="POST">

            <div class="campo">
                <label for="correo">Correo electrónico</label>

                <input
                    type="email"
                    id="correo"
                    name="correo"
                    placeholder="Ingresa tu correo electrónico"
                    required
                >
            </div>

            <div class="campo">
                <label for="contrasena">Contraseña</label>

                <input
                    type="password"
                    id="contrasena"
                    name="contrasena"
                    placeholder="Ingresa tu contraseña"
                    required
                >
            </div>

            <div class="opciones">
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit" class="btn-ingresar">
                Ingresar
            </button>

        </form>

        <div class="registro">
            ¿No tienes una cuenta?
            <a href="registro.php">Regístrate</a>
        </div>

        <a href="index.php" class="volver">
            ← Volver al inicio
        </a>

    </div>

</body>
</html>
