






























<?php
$emailto = "tiguilingou@gmail.com";

session_start();
require('../database.php');
if(isset($_POST)){
$date = $_POST['date'];
$type = $_POST['type'];

$id_user = $_SESSION['iduser'];
$emailtext="";


if($type != "" ){

	$req = $BDD->prepare('INSERT INTO rendez_vous(type, date, id_user) VALUES (?,?,?)');
	$req->execute(array($type, $date, $id_user));
	$req = $BDD->prepare('SELECT * FROM `user` WHERE id = ?');
	$req->execute(array($id_user));
		$row = $req->fetch();
		//var_dump($row);

		$nom = "Man";
$prenom = "Liight";
 

		

	  	$to = $email;
		$subject = "Sujet";
		$txt = "Hello world! ,votre rendez_vous a bien été prise en compte";
		$headers = "From: tiguilingou@gmail.com" . "\r\n" .
		"CC: tiguilingou@gmail.com";

		mail($to,$subject,$txt,$headers);
		header("location:../index.php");
		             }else{

                      header("location:../.php");

		             }
 
}
 ?>
  	