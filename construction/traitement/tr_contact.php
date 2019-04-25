<?php

$emailto = "tiguilingou@gmail.com";

session_start();
require('../database.php');
if(isset($_POST)){
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$phone= $_POST['Telephone'];
$date = $_POST['date'];
$password = $_POST['password'];

  if($email != "" )
        $to = $email;
		$subject = "Sujet";
		$txt = "Hello world! Mr/Mme ";
		$headers = "From: tiguilingou@gmail.com" . "\r\n" .
		"CC: tiguilingou@gmail.com";

		mail($to,$subject,$txt,$headers);
		header("location:../index.php");
		             }else{

                      header("location:../admin.php");

		             }
 
                     
                   ?>
  	             
                    
   
		//var_dump($row);

		
