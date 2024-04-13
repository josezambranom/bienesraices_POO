<?php 

    require 'includes/app.php';
    $db = conectarDB();

    $errores = [];

    // Autenticar el usuario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // echo '<pre>';
        // var_dump($_POST);
        // echo '</pre>';

        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
        $password = mysqli_real_escape_string($db,$_POST['password']);

        if(!$email) {
            $errores[] = "El email es obligatorio o no es válido";
        }

        if(!$password) {
            $errores[] = "El password es obligatorio";
        }

        if(empty($errores)){
            // Revisar si existe usuario
            $query = "SELECT * FROM usuarios WHERE email = '${email}'";
            $resuldo = mysqli_query($db, $query);

            if($resuldo -> num_rows) {

                // Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resuldo);

                // Verificar si el password es correcto
                $auth = password_verify($password, $usuario['password']);

                if($auth) {
                    // Usuario autenticado
                    session_start();
                    // Llenar el arreglo de la sesión
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('Location: /admin');
                    // echo '<pre>';
                    // var_dump($_SESSION);
                    // echo '</pre>';

                } else {
                    $errores[] = "El password es incorrecto";
                }

            } else {
                $errores[] = "El usuario no existe";
            }
        }
    }

    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>
        <?php foreach ($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        <form method="POST" class="formulario" novalidate>
        <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input name="email" id="email" type="email" placeholder="Tu email">

                <label for="password">Password</label>
                <input name="password" id="password" type="password" placeholder="Tu Password">

            </fieldset>
            <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>