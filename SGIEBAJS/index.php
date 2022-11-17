<?php
session_start();
if(!isset($_SESSION["mode"])){
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo.png">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/homepage.css">
    <title>SGIEBAJS</title>
</head>
<body class="flex">
    <header class="page-header">
        
            <figure class="image-container">
                <img src="images/logo.png" alt="Escuela basica Antonio Jose de Sucre logo" class="page-logo">
            </figure>
            <nav class="nav-bar">
                <div class="container">
                <ul class="navigation-items flex">
                    <li class="nav-item"><a href="#" data-id="nosotros">Nosotros</a></li>
                    <li class="nav-item"><a href="#" data-id="mision">Misión</a></li>
                    <li class="nav-item"><a href="#" data-id="vision">Visión</a></li>
                    <li class="nav-item login" title="Ingresar">
                        <svg class="login-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #f7f7f7;"><path d="m13 16 5-4-5-4v3H4v2h9z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>
                       </li>
                        </ul>
                </div></nav>
    
    </header>
    <?php
    include_once("php/view/utilities/message.php")
    ?>
    <main class="flex">
        <section class="login-section">
            <header class="login-header">
                <h2 >Ingresar</h2>
                <svg class="close-login" xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" style="fill: rgba(104, 104, 104, 1);"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>
            </header>
            <form action="php/controller/c_login.php" method="post" class="login-form flex" autocomplete="off">
                <label for="cedula">
                    <span class="label-header ">Numero de Cedula</span>
                    <input type="text" id="cedula" class="login-input" name="cedula" placeholder="Numero de Cedula">
                    <span class="error-msg" ></span>
        
                </label>
                <label for="password">
                    <span class="label-header ">Contraseña</span>
                    <input type="password" id="password" class="login-input" name="password" placeholder="Contraseña">
                    <span class="error-msg" ></span>
                </label>
                    
                <input type="button" id="btn-login" class="btn login" value="Acceder">
            </form>
        </section>
        <div class="container grid">
            <article class="text-center show-article" id="nosotros">
                <h1 class="article-title heading  ">Escuela Basica Antonio Jose de Sucre
                </h1>
                <p class="home-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere quis atque eius totam voluptatem ducimus, et officia laboriosam, ipsum sapiente, libero adipisci? Odio labore eveniet id ipsa magni quam fugit?</p>
            </article>
            <article class="text-center" id="mision" >
                <h2 class="article-title">Nuestra Misión</h2>
                <p class="home-text">
                    Formar ciudadanos, íntegros y felices, comprometidos con la transformación de su propia realidad a
través de la conjunción del esfuerzo de todos los involucrados en el proceso de enseñanza
aprendizaje en la escuela.
                </p>
            </article>
            <article class="text-center" id="vision" >
                <h2 class="article-title">Nuestra Visión</h2>
                <p class="home-text">
                    La Escuela Básica Estadal “ Antonio José de Sucre”, ubicada en la comunidad Chirere de municipio
Araure del Estado Portuguesa, será un centro de desarrollo social, caracterizado por una
organización renovadora, participativa, recreativa, crítica y dinámica, con una comunicación
horizontal, donde los alumnos, docentes, padres, representantes y demás actores del proceso
educativo se sientan comprometidos, desarrollando trabajos en equipo, basados en la enseñanza de
valores, cultura y tecnología, asumiendo como centro de la acción al niño, para el desarrollo de sus
potencialidades, contribuyendo con la transformación de la realidad Venezolana.
                </p>
            </article>
        </div>
    </main>
    <footer>
        <p class="text-center">&copy; Escuela Basica Antonio Jose de Sucre</p>
    </footer>
    <script type="module" src="javascript/homepage.js"></script>
</body>
</html>
<?php
}
else{

    switch($_SESSION["mode"]){
        case "director":
            header("Location: php/view/admin.php");
            break;
        case "secretario":
            exit();    
    }
}
?>