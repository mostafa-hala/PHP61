<?php
    /*
    mysql|mysqli oop |pdo
     php data object
    */

$dsn= "mysql:host=localhost;dbname=php61";
$username ="root";
$password ="";
    try{

      $con = new PDO($dsn , $username , $password);
    //    echo "connect";
    }catch(PDOException $e){
        // echo $e;

    }


?>