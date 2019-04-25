<?php

session_start();
require('../database.php');
if(isset($_POST)){
   $email =  $_POST["email"];
   $password = $_POST["password"];
    

$req = $BDD->prepare('SELECT * FROM user WHERE email=:email AND password=:password');
      $req->bindValue('email',$email,PDO::PARAM_STR);
      $req->bindValue('password',$password,PDO::PARAM_STR);
    	$req->execute();

      if($result = $req->fetch())
        {

        	$_SESSION['iduser'] = $result['id'];
	
        	header("location:../plan_galerie.php");
        }else{
        	header("location:../index.php");
        }
  }

  function verifyInput($data){

  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

  }
  ?>
  
