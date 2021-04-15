<?php
    /*************************
    *  Page: pageinscription.php
    *  Page encodée en UTF-8
    **************************/
?><!DOCTYPE HTML>
<html>



    <head>
        <title>Script espace membre</title>
    </head>
	
	
	<!--STYLE--> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto">
	<style type="text/css">
	
			h {
				position: relative;
				top: 5%;
				width: 100%;
				text-align: center;
				font-family: 'Anton', sans-serif;

				}
				
			h {
				position: relative;
				top: 10%;
				width: 100%;
				text-align: center;
				font-family: 'Roboto', sans-serif;
			
				}
				
		
			body{ background-color: #00000;
			margin: 20px;
				}
				

				  h4
				{

					height: 200px ;
					margin : 0 px;
					background: url(profil.jpg) no-repeat bottom center ;
				}
			.center-div {
     margin: 0 auto;
     width: 600px; 
	 text-align: center;
}

			.center-pic {
     margin: 0 auto;
     width: 300px; 
	 text-align: center;
}

			.center-form{
     margin: 0 auto;
     width: 600px; 
	 text-align: center;
}

			.center-contact{
     margin: 0 auto;
     width: 600px; 
	 text-align: center;
}
				
	</style>
	<body>
	

	<!--FORMULAIRE --> 
	
	 <div class="container">
	 
	 
	 <div class="center-div">
	 
			<h1>S'inscrire</h1>	<br><br>	
			
			<h3> Bienvenue sur la plateforme de FUQAHA Sarah.<br>
			Une apprentie en recherche d'un contrat d'apprentissage. </h3> <br><br>
			  <legend>Vous recherchez une alternante? N'hésitez pas à vous inscrire ,remplissez le formulaire ci-dessous:</legend>
	
	</div>
	
	<br><br>
	
	 <div class="center-pic">
	 
			<h4></h4>	
	</div>
	 
		<br><br>
	
	<div class="center-form">			
   
			<form method="post" action="formulaire2.php">
			
			    <div class="row mb-3">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Nom">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Prénom">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Nom">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Prénom">
                    </div>
			
			<div class="form-group">
            <label for="nom">Entrez votre nom</label>
            <input type="text" class="form-control" name="nom" placeholder="Nom">
            
	
		
		<div class="form-group">
		<label for="nom">Entrez votre nom</label>		
		<input type="text" class="form-control" id="prenom" placeholder="Prenom"required>
		
		
		<div class="form-group">
        <label for="nom">Entrez votre nom</label>		
	    <input type="text" class="form-control" id= "pseudo" name="pseudo" placeholder="Pseudo" required>
		</div>
		
		<div class="form-group">
        <label for="nom">Entrez votre nom</label>
        <input type="text" class="form-control" name="prenom" placeholder="Prenom" required> 
		</div>
		
		<div class="form-group">
        <label for="nom">Entrez votre nom</label>
		<input type="text" class="form-control" name="entreprise" placeholder="Nom de votre entreprise" required> 
		
		<div class="form-group">
        <label for="nom">Entrez votre nom</label>
		<input type="date" class="form-control" name="date" placeholder="Date d'inscription" required>		
	    </div>
		
		<div class="form-group">
        <label for="nom">Entrez votre nom</label>
		<input type="email" class="form-control" name="mail" placeholder=" Votre e-mail" required> 
        </div>
		
		<div class="form-group">
        <label for="nom">Entrez votre nom</label>
		<input type="tel" class="form-control" name="tel" placeholder="Telephone" required> 
		</div>
		
		<div class="form-group">
        <label for="nom">Entrez votre nom</label>
		<textarea name="message" class="form-control" placeholder="Laissez-moi un message si vous le désirez :" ></textarea> <br><br>
		</div>
		
       <input type="submit" id="submit" name="valider" value="Cliquez ici pour envoyer le formulaire"> 

			</fieldset>
	</div>
			
	<!--RETOUR ACCUEIL --> 
	
	
		
	<a style="color:grey" href="./">Retour à l'accueil</a>
	<br><br>
	<a style="color:grey" href="./new%201.html">Mon Profil</a>
	

<!--FOOTER--> 


<br><br><br>

 <div class="center-contact">
<h3>Contact</h3>
    	
Adresse : 
Rés. Bois Rivière Imm. Carambole
Apt n°4 Esc B Terreville
Téléphone : 
0696 79.20.19
Mail :
sabfuqaha@gmail.com
</div>
<br> 			

    </body>
</html>	
		
		
		
      