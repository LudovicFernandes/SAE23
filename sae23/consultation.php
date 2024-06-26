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
     		<li><a href="consultation.php" >Consultation</a></li>			
			<li><a href="gestion.html" >Gestion</a></li>
			<li><a href="gestiondeprojet.html" >Gestion de Projet</a></li>
			
		
		</ul>
	</nav>
	
<section>

<h1>Bâtiment E</h1>

	<?php
session_start();


include("mysql.php");

$query = "SELECT id_mesure, valeur, date, horaire, nom_capteur, nom_salle
          FROM Mesure
          JOIN Salle s ON nom_salle = nom_salle
          WHERE nom_salle LIKE 'E%'
          ORDER BY horaire DESC
          LIMIT 2";


$result = $id_bd->query($query);


if (!$result) {
    die("Erreur lors de l'exécution de la requête : " . $id_bd->error);
}

echo "<table border='1'>
        <tr>
            <th>ID Valeur</th>
            <th>Valeur</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Nom Capteur</th>
            <th>Nom Salle</th>
        </tr>";


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id_mesure'] . "</td>
                <td>" . $row['valeur'] . "</td>
                <td>" . $row['date'] . "</td>
                <td>" . $row['horaire'] . "</td>
                <td>" . $row['nom_capteur'] . "</td>
                <td>" . $row['nom_salle'] . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>Aucune donnée trouvée.</td></tr>";
}

echo "</table>";

$id_bd->close();
?>
<h1>Bâtiment B</h1>
<?php


include("mysql.php");


$query = "SELECT id_mesure, valeur, date, horaire, nom_capteur, nom_salle
          FROM Mesure
          JOIN Salle s ON nom_salle = nom_salle
          WHERE nom_salle LIKE 'B%'
          ORDER BY horaire DESC
          LIMIT 2";

$result = $id_bd->query($query);


if (!$result) {
    die("Erreur lors de l'exécution de la requête : " . $id_bd->error);
}

echo "<table border='1'>
        <tr>
            <th>ID Valeur</th>
            <th>Valeur</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Nom Capteur</th>
            <th>Nom Salle</th>
        </tr>";


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id_mesure'] . "</td>
                <td>" . $row['valeur'] . "</td>
                <td>" . $row['date'] . "</td>
                <td>" . $row['horaire'] . "</td>
                <td>" . $row['nom_capteur'] . "</td>
                <td>" . $row['nom_salle'] . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>Aucune donnée trouvée.</td></tr>";
}

echo "</table>";

$id_bd->close();
?>

           
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
 
 
 
 
 
  
