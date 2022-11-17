<?php
$password = "prueba123";
$passwordReady = password_hash($password, PASSWORD_DEFAULT);
$dns = "mysql:host=localhost;dbname=sgiebajs";
$connection = new PDO($dns, "root","");
$query_exec = $connection->prepare("insert into login(cedula,password) values (?,?)");
$query_exec->execute(["27937454",$passwordReady]);
if( $query_exec->rowCount()>0){
    $result=$query_exec->fetch(PDO::FETCH_ASSOC) ;
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            echo password_verify($password, $passwordReady)? "pass" : "nope";
        ?>
    </h1>
</body>
</html>