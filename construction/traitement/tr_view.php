 <?php
 $id= $_GET['id'];
require('../database.php');
if(isset($_POST)){
  $nom = $_POST["nom"];
   $prenom =  $_POST["prenom"];
   $email =  $_POST["email"];
   $tel =  $_POST["tel"];
   $password = $_POST["password"];
   
   $req = $BDD->prepare("UPDATE `user` SET `nom`=?,`prenom`=?,`email`=?,`tel`=?,`password`=? VALUES  WHERE  id=$id");
   $req->bindValue('nom',$nom, PDO::PARAM_STR);
   $req->bindValue('prenom',$prenom, PDO::PARAM_STR);
   $req->bindValue('email',$email, PDO::PARAM_STR);
   $req->bindValue('tel',$tel, PDO::PARAM_STR);
   $req->bindValue('password',$password, PDO::PARAM_STR);

  

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

<DOCTYPE html>
    
    <html>
    <head>
        <meta charset="utf-8" content="width=widht-device,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <script type="text/javascript" src="por.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
       <title> Bati+ ivoir || MODIFIER</title>
    </head>
    <body  >
    	
        
        <div class="loginBox">
            <h2>MODIFIER
             </h2>
            <form action="" method="post">
                <p>Nom</p>
                <input type="text" name="nom" placeholder="nom">
                <p>Prenom</p>
                <input type="text" name="prenom" placeholder="prenom">
                 <p>Email</p>
                <input type="text" name="email" placeholder="Entrer Email">
                 <p>Telephone</p>
                <input type="text" name="tel" placeholder="Telephone">
                 <p>Password</p>
                <input type="Password" name="password" placeholder="Mot_de_passe">
                 <input type="submit" name="" value=" Valider ">
            </form>

    


    </body>
    </html>
    



 
