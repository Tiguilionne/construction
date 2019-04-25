 <?php
require('../database.php');
if(isset($_POST)){
  $nom = $_POST["nom"];
   $prenom =  $_POST["prenom"];
   $email =  $_POST["email"];
    $telephone =  $_POST["tel"];
   $password = $_POST["password"];
    
$req = $BDD->prepare("INSERT INTO user('nom', 'prenom', 'email', 'tel', 'password') VALUES (?,?,?,?,?)");
  $query = $req->execute(array($nom,$prenom,$email,$telephone,$password));

if($query)
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