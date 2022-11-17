<?php
include_once("../model/m_login.php");
// session_start();
// session_destroy();
if(isset($_POST["ope"])){
    session_start();
    $_SESSION["mode"] = $_POST["ope"]=="1"? "director" : "secretario";
}
if(isset($_GET["logout"])){
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../../index.php");
}
if(session_status()!==2){
    $login = new login();
    $login ->setLogin($_POST["cedula"]);
    $result = $login->getLogin();
    if($result && password_verify($_POST["password"], $result["password"])){
        $rol = $login->getRol();
        // $_SESSION["mode"] = $rol["rol"]=="1"? "director" : "secretario";
        echo json_encode([true, $rol["rol"]]);
        exit();
    }
    // session_unset();
    // session_destroy();
    echo json_encode([false,0]);
    exit();
}
else{
   if($_SESSION["mode"]=="director"){
        header("Location: ../view/admin.php");
    }
    else if($_SESSION["mode"]=="secretario"){
    
    }
}



?>