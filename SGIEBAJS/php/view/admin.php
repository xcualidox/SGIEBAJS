<?php
session_start();
if(isset($_SESSION["mode"])){
    if($_SESSION["mode"]=="director"){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../../images/logo.png">
    <link rel="stylesheet" href="../../styles/styles.css">
    <link rel="stylesheet" href="../../styles/admin.css">
    <title>SGIEBAJS</title>
</head>
<body class="flex" >
    <aside class="side-section">
        <svg class="close" xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" style="fill: #e9ecef75;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>
        <header class="side-header flex">
            <svg  xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" style="fill: rgba(10, 197, 253, 1);"><path d="M12 2C6.579 2 2 6.579 2 12s4.579 10 10 10 10-4.579 10-10S17.421 2 12 2zm0 5c1.727 0 3 1.272 3 3s-1.273 3-3 3c-1.726 0-3-1.272-3-3s1.274-3 3-3zm-5.106 9.772c.897-1.32 2.393-2.2 4.106-2.2h2c1.714 0 3.209.88 4.106 2.2C15.828 18.14 14.015 19 12 19s-3.828-.86-5.106-2.228z"></path></svg>
            <p class="user-name">Alexander Cruz</p>
        </header>
        <nav class="side-nav">
            <ul class="nav-items flex">
                <li class="nav-item flex">
                    <img src="../../images/icons/graduation.svg" alt="">
                    <a href="#">Docentes</a></li>
                <li class="nav-item flex">
                    <img src="../../images/icons/building.svg" alt="">
                    <a href="#">Secciones</a></li>
                <li class="nav-item flex">
                    <img src="../../images/icons/person.svg" alt="">
                    <a href="#">Madre</a></li>
                <li class="nav-item flex">
                    <img src="../../images/icons/person.svg" alt="">
                    <a href="#">Representante</a></li>
                <li class="nav-item flex">
                    <img src="../../images/icons/child.svg" alt="">
                    <a href="#">Alumnos</a></li>
                <li class="nav-item flex">
                    <img src="../../images/icons/book.svg" alt="">
                    <a href="#">Unidades de estudio</a></li>
                <li class="nav-item flex"><a href="#"></a></li>
            </ul>
        </nav>
    </aside>
    <header class="page-header">
        <svg xmlns="http://www.w3.org/2000/svg" class="open" width="27" height="27" viewBox="0 0 24 24" style="fill: rgb(104, 104, 104);"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg>
        <div class="container flex">
            <h1 class="login-mode">Director (a)</h1>
            <svg  class="logout-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(104, 104, 104)"><path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>
        </div>
    </header>
    <main class="main-content"><div class="container">
        
    </div></main>
    <footer class="page-footer"><p class="text-center">&copy; Escuela Basica Antonio Jose de Sucre</p></footer>
    <script src="../../javascript/admin.js"></script>
</body>
</html>
<?php
}
else{
    exit;
}
}
else{
    session_unset();
    session_destroy();
    header("Location: ../../index.php");

}
?>