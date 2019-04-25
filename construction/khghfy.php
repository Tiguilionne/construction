 <?php
require('../database.php');
if(isset($_POST)){
  $nom = verifyInput($_POST["nom"]);
   $prenom =  verifyInput($_POST["prenom"]);
   $email =  verifyInput($_POST["email"]);
    $telephone =  verifyInput($_POST["tel"]);
   $password = verifyInput($_POST["password"]);
  
    
$db=Database::Connect();
$verify=$db->prepare("INSERT INTO user(`nom`, `prenom`, `email`, `tel`, `password`) VALUES (?,?,?,?,?)");
$verify->execute(array( $nom, $prenom,$email,$telephone,$password));
$db=Database::disconnect();

	header("location:../conn.php");
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