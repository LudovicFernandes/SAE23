<?php
	
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>

  <title> CAPTEURS IUT BLAGNAC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Pour bien gérer le RWD -->
  <meta name="author" content="FL" />
  <meta name="description" content="saé14" />
  <meta name="keywords" content="HTML, CSS" />
  
  <link rel="stylesheet" type="text/css" href="./styles/style2.css" />
  
  <link rel="stylesheet" type="text/css" media="screen" href="sans-serif.css">
  <link rel="stylesheet" type="text/css" media="print" href="serif.css">
        
</head>

<body>
 
	<header>
		<h1> CAPTEURS IUT </h1>
	</header> 
	
	<nav>
		<ul id="navigation">
            <li><a href="index.html" >Accueil</a></li>
			<li><a href="administration.html" >Administration</a></li>
     		<li><a href="consultation.html" >Consultation</a></li>			
			<li><a href="gestion.html" >Gestion</a></li>
			<li><a href="gestiondeprojet.html" >Gestion de Projet</a></li>
			
		
		</ul>
	</nav>
		<!-- Affichage entete -->
		<?php 
			$_SESSION = array(); 
			session_destroy();   
			unset($_SESSION);    
			include("entete.html");
		?>
		<section>
			<p>
				<br />
				<em><strong>Administration des bâtiments : Acc&egrave;s limit&eacute; aux personnes autoris&eacute;es</strong></em>
				<br />
			</p>
			<br />
			<p class="erreur">Mot de passe non saisi ou erron&eacute; !!!</p>
			
		</section>
		


<footer>
    <ul>
	  <li>IUT de Blagnac</li>
	  <li>FERNANDES / PIQUEMAL / BENNE</li>
      <li>BUT R&amp;T &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
	</ul>  
</footer>

</body>
</html>
 
