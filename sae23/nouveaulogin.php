<?php
session_start();

// Check the presence of login and password fields in the request
if (empty($_POST["login"]) || empty($_POST["mdp"])) {
    header("Location: loginerror.php");
    exit();
}

$login = $_POST["login"];
$mdp = $_POST["mdp"];
$_SESSION["auth"] = FALSE;

// Connexion à la base de données
include ("mysql.php");

try {
    // Prepare request to retrieve user's hashed password
    $stmt = $id_bd->prepare("SELECT `mdp` FROM `Bâtiment` WHERE `login` = ?");
    if (!$stmt) {
        throw new Exception($id_bd->error);
    }
    
    $stmt->bind_param("s", $login);
    if (!$stmt->execute()) {
        throw new Exception($stmt->error);
    }
    
    $stmt->bind_result($hashedPassword);
    $stmt->fetch();
    $stmt->close();
    
    // Check password
    if ($hashedPassword == $_POST["mdp"]) {
        $_SESSION["auth"] = TRUE;
        $_SESSION["login"] = $login;
        echo "<script type='text/javascript'>document.location.replace('choix.php');</script>";
    } else {
        session_unset();
        session_destroy();
        echo "<script type='text/javascript'>document.location.replace('loginerrorgestion.php');</script>";
    }
} catch (Exception $e) {
    die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
} finally {
    $id_bd->close();
}
?>
