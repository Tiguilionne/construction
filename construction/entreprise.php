
<DOCTYPE html>

	<html>
	<head>
		<meta charset="utf-8" content="width=widht-device,initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	    <script type="text/javascript" src=""></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
	   <title> Bati+ ivoir || ENTREPRISE</title>
	</head>
	<body>
		<section>
    <nav class="navbar navbar-light bg-light fixed-top">
         <?php include('include/menu.php');?>
    </nav>
  </section>

</section>
   <section>
  <div class="container">
   <div class="row">
    <div class="col-md-4" class="thumbnail">
      
       <h3  class="titreh3" style="color: blue">QUI SOMMES-NOUS</h3>
        <div class="border"></div>
       <p class="p">Nous nous engageons à offrir à nos clients, un service professionnel et personnalisé en misant sur une garantie de discrétion et de confidentialité, un devoir de transparence et de système qualité.</p>
      </div>
    <div class="container" id="service">
  <div class="row">
    <div class="col-md-4" class="thumbnail">
      
       <h3  class="titreh3" style="color: blue">ARCHITECTECTE QUALIFIANTE</h3>
        <div class="border"></div>
       <p class="p" style="color: ">Nous nous engageons à offrir à nos clients, un service professionnel et personnalisé en misant sur une garantie de discrétion et de confidentialité, un devoir de transparence et de système qualité.</p>
     </div>
    
    <div class="container" id="service">
  <div class="row">
    <div class="col-md-4"class="thumbnail" >
     
       <h3  class="titreh3"style="color: blue">DISIGN INTERIEURE</h3>
        <div class="border"></div>
       <p class="p">Nous nous engageons à offrir à nos clients, un service professionnel et personnalisé en misant sur une garantie de discrétion et de confidentialité, un devoir de transparence et de système qualité.</p>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>

		
			<div class="alert alert-success" >
				<p style="text-align: center;">
          <span style="color: black">Build<span style="color: red">Happy</span></span>
        </p>
			
	          
               
               <section>
    	<div class="row">
		  <div class="col-ms-12 col-md-12">
			<div class="thumbnail">
		      <img src="css/images/basse2.jpg" class="fixed"  id="slider" width="100%"; height="" >
	     </div>
       </div>
     </div>
 </section>

 <section style="text-align: center;font-size: 15px;">
 	ARCHITECT HAUTEMENT QUALIFIE
 </section>
<section>
 <div class="row">
      

   <div class="col-ms-6 col-md-4">
 		
 			<h4> Ligne ACCESS</h4> : Une ligne de maison moderne, fonctionnelle, évolutive, économe en énergie et à prix très accessible.</br>
Une maison originale, pour laquelle une attention particulière a été portée à la valorisation de la façade.</br> 
La ligne ACCESS est reconnaissable grâce à son jeu d’enduit bi-color et à sa marquise laquée, très contemporaine,</br> apportant originalité et protection : une création exclusive Demeures de la côte d’Argent.
        
   </div>


   <div class="col-ms-6 col-md-4" >
    <div class="thumbnail">
            <img src="css/images/atag3.jpg" style="background-color: orange">
          </div> 
   </div>

   
   <div class="col-ms-6 col-md-4">
 		<div class="thumbnail">
 			<img src="css/images/cuis.jpg">
        </div> 
   </div>

 </div>
</section>


<section>
 <div class="row">
      <div class="col-ms-6 col-md-4" >
    <div class="thumbnail">
            <img src="css/images/atag3.jpg" style="background-color: orange">
          </div> 
   </div>

   <div class="col-ms-6 col-md-4">
    
      <h4> Ligne ACCESS</h4> : Une ligne de maison moderne, fonctionnelle, évolutive, économe en énergie et à prix très accessible.</br>
Une maison originale, pour laquelle une attention particulière a été portée à la valorisation de la façade.</br> 
La ligne ACCESS est reconnaissable grâce à son jeu d’enduit bi-color et à sa marquise laquée, très contemporaine,</br> apportant originalité et protection : une création exclusive Demeures de la côte d’Argent.
        
   </div>

   
   <div class="col-ms-6 col-md-4">
    <div class="thumbnail">
      <img src="css/images/cuis.jpg">
        </div> 
   </div>

 </div>
 </section>


<section>
 <div class="row">
      <div class="col-ms-6 col-md-4" >
    <div class="thumbnail">
            <img src="css/images/atag3.jpg" style="background-color: orange">
          </div> 
   </div>

   

   
   <div class="col-ms-6 col-md-4">
    <div class="thumbnail">
      <img src="css/images/cuis.jpg">
        </div> 
   </div>


<div class="col-ms-6 col-md-4">
    
      <h4> Ligne ACCESS</h4> : Une ligne de maison moderne, fonctionnelle, évolutive, économe en énergie et à prix très accessible.</br>
Une maison originale, pour laquelle une attention particulière a été portée à la valorisation de la façade.</br> 
La ligne ACCESS est reconnaissable grâce à son jeu d’enduit bi-color et à sa marquise laquée, très contemporaine,</br> apportant originalité et protection : une création exclusive Demeures de la côte d’Argent.
        
   </div>
 </div>
 </section>









      
        

 <footer>
<?php include('include/footer.php');?>
</footer>
	<script type="text/javascript">
	var images=["css/images/baii.jpg","css/images/cham.jpg","css/images/decorati.jpg","css/images/cuisin.jpg","css/images/imm2.jpg","css/images/salonn.jpg","css/images/lumii.jpg"];
	var i=0;
	 setInterval(function(){ 
     document.getElementById('slider').src=images[i];
     i++;
     if(i==7) i=0;
       },1500);
   </script>
	</body>
	</html>