<?php 
   
  require 'database.php';
  
  $user=$BDD ->prepare("SELECT  `id`, `nom`, `prenom`, `email`, `tel`, `password` FROM `user` ");
  $user->execute(array());

 

 ?>

<!DOCTYPE html>
<html>
<head>
   <title> Bati+ ivoir || ADMIN</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="admin/css/bootstrap.css">
     <script src="admin/css/bootstrap.js"></script> 
     <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" type="text/css" href="css/aliment.css">
</head>

<body>
  <!--bar de navigation -->
    <!--bar de navigation -->
 <nav class="navbar navbar-fixed-top" id="navbarfixe">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav navbar-right" id="lien-inscription">
      <li><a href="#connexion" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Se déconnecter</a></li>
    </ul>
  </div>
</nav>

 
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>

        <h1 class="text-logo" style="margin-top: 300px;"></span> Système d'administration <span class="glyphicon glyphicon-wrench"></h1>
        <div class="container admin">
            <div class="row">
                <h1><strong><span class="glyphicon glyphicon-list-alt"> Liste des produits   </strong><a href="ajouter-produit.html" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></h1>
                <table class="table table-striped table-bordered">
              
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prenon</th>
                      <th>Telephone</th>
                      <th>email</th>
                      <th>password</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                       

                        while ( $afch = $user->fetch()) { ?>                           <tr>
                            <td><?php echo $afch['nom']; ?></td>
                            <td><?php echo $afch['prenom']; ?></td>
                            <td><?php echo $afch['tel']; ?></td>
                            <td><?php echo $afch['email']; ?></td>
                            <td><?php echo $afch['password']; ?></td>
                            
                            <td width=300>
                            <a class="btn btn-default" href="detail-produit.php?id=<?php echo $afch['id']; ?>"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>
                         
                            <a class="btn btn-primary" href="traitement/tr_view.php?id=<?php echo $afch['id']; ?>"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>
                        
                            <a class="btn btn-danger" href="traitement/tr_supprimer.php?id=<?php echo $afch['id']; ?>"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>
                            </td>
                     </tr>
                    <?php } ?>
                     
                      <tr>
                        <td>nom</td>
                            <td>prenom</td>
                            <td>age</td>
                            <td>price</td>
                            <td width=300>
                            <a class="btn btn-default" href="detail-produit.html"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>
                         
                            <a class="btn btn-primary" href="#"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>
                        
                            <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-remove"></span> Supprimer</a>
                            </td>
                     </tr>
                    
                  </tbody>
                 
                    <div class="alert alert-info" role="alert">Aucun produit inséré.</div>
                 
                </table>
            </div>
        </div>
    </body>

</html>