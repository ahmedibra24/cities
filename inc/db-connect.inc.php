<?php

try{ 
    
    $pdo= new PDO('mysql:host=localhost;dbname=cities;charset=utf8mb4','cities','106Gb@o5QYc@wJCK',[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ]);
}
catch(PDOException $e){
        echo 'A problem occured with the database connection...' . $e->getMessage();
        die();
}