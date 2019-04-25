<DOCTYPE html>
    
    <html>
    <head>
        <meta charset="utf-8" content="width=widht-device,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <script type="text/javascript" src="por.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
       <title> Bati+ ivoir || INSCRIPTION</title>
    </head>
    <body class="oklm" >
        <nav class="navbar navbar-light bg-light fixed-top">
         <?php include('include/menu.php');?>
    </nav>
        <div class="loginBox">
            <img src="css/images/userr.png" class="mimi" img-circle" width="180px">
            <h2>SE CONNECTER </h2>
            <form action="traitement/tr_inscription.php" method="post">
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
    