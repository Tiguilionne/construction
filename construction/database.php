<?php

/*
 *Connection a la base de données
 */
        $name_base = 'plan';
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $option = '';
    try{
    $BDD = new PDO('mysql:host='.$host.';dbname='.$name_base.'',$user,$password);
    $BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
        
            header('location:erreur.php');
        }
?>
