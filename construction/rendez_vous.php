<DOCTYPE html>

	<html>
	<head>
		<DOCTYPE html>
    
    <html>
    <head>
        <meta charset="utf-8" content="width=widht-device,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <script type="text/javascript" src="por.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
       <title>Bati+ ivoir || RENDEZ_VOUS</title>
    </head>
    <body class="oklm" >
        <nav class="navbar navbar-light bg-light fixed-top">
         <?php include('include/menu.php');?>
    </nav>
        <div class="loginBox">
           
  <h2>PRENDRE RENDEZ_VOUS </h2>
            <form action="traitement/tr_rendez_vous.php" method="post">
                
                <p>type</p>
                <input type="text" name="type" placeholder="Entrer tel">
                
                <p>Date de RDB</p>
                <input type="Date" name="date" placeholder="Entrer une date">
                <input type="submit" name="" value=" Valider ">
                </form>

    


    </body>
    </html>
