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
<h1>Bâtiment B</h1>
<?php

// Database connection
include("mysql.php");

// SQL query to retrieve the last sensor value in "B" rooms
$query = "SELECT id_mesure, valeur, date, horaire, nom_capteur, nom_salle
          FROM Mesure
          JOIN Salle s ON nom_salle = nom_salle
          WHERE nom_salle LIKE 'B%'
          ORDER BY horaire DESC
          LIMIT 2";

// Execute request
$result = $id_bd->query($query);

// Check if the request was successful
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

// Check if any results have been returned
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
<h1> Température Salle B106</h1>
<?php

    
    include("mysql.php");

    
    $query = "SELECT MAX(valeur) AS valeur_max, MIN(valeur) AS valeur_min, AVG(valeur) AS valeur_moyenne
              FROM Mesure
              WHERE nom_capteur = 'AM107-14'";

    
    $result = $id_bd->query($query);

    
    if (!$result) {
        die("Erreur lors de l'exécution de la requête : " . $id_bd->error);
    }

    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<table border='1'>
                <tr>
                    <th>Valeur Max</th>
                    <th>Valeur Min</th>
                    <th>Valeur Moyenne</th>
                </tr>
                <tr>
                    <td>" . number_format($row['valeur_max'], 2) . "</td>
                    <td>" . number_format($row['valeur_min'], 2) . "</td>
                    <td>" . number_format($row['valeur_moyenne'], 2) . "</td>
                </tr>
              </table>";
    } else {
        echo "<p>Aucune donnée trouvée pour la salle B106.</p>";
    }

    $id_bd->close();
    ?>
<h1> Température Salle B111</h1>
<?php

    
    include("mysql.php");

    
    $query = "SELECT MAX(valeur) AS valeur_max, MIN(valeur) AS valeur_min, AVG(valeur) AS valeur_moyenne
              FROM Mesure
              WHERE nom_capteur = 'AM107-3'";

   
    $result = $id_bd->query($query);

    
    if (!$result) {
        die("Erreur lors de l'exécution de la requête : " . $id_bd->error);
    }

    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<table border='1'>
                <tr>
                    <th>Valeur Max</th>
                    <th>Valeur Min</th>
                    <th>Valeur Moyenne</th>
                </tr>
                <tr>
                    <td>" . number_format($row['valeur_max'], 2) . "</td>
                    <td>" . number_format($row['valeur_min'], 2) . "</td>
                    <td>" . number_format($row['valeur_moyenne'], 2) . "</td>
                </tr>
              </table>";
    } else {
        echo "<p>Aucune donnée trouvée pour la salle B111.</p>";
    }

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
