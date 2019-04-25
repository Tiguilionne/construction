 <?php
require('../database.php');
if(isset($_POST)){
  $nom = $_POST["nom"];
   $prenom =  $_POST["prenom"];
   $email =  $_POST["email"];
   $tel =  $_POST["tel"];
   $password = $_POST["password"];
   
   $req = $BDD->prepare('INSERT INTO user(nom, prenom, email, tel, password) VALUES (:nom, :prenom, :email, :tel, :password)');
   $req->bindValue('nom',$nom, PDO::PARAM_STR);
   $req->bindValue('prenom',$prenom, PDO::PARAM_STR);
   $req->bindValue('email',$email, PDO::PARAM_STR);
   $req->bindValue('tel',$tel, PDO::PARAM_STR);
   $req->bindValue('password',$password, PDO::PARAM_STR);

   if($req->execute())
   {
     header("location:../connexion.php");
   }
   else{
    header("location:../inscription.php");

   }


}else{
  header("location:../index.php");
}
  

  function verifyInput($data){

  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

  }
  ?>