<?php
// Connexion à la base de données
$bool = session_start();
echo $bool;

$dbusername = 'review_site';
$dbmdp = 'password';

$conn = new mysqli("localhost", $dbusername, $dbmdp, "stock");
$conn->set_charset("utf8");

echo $conn->connect_error;

// Vérification de la connexion
if (! $conn->connect_error) 
    echo "connecter ";
else
    echo "erreur de db ";



// Récupération des données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

echo $username;
echo $password;

$query = "SELECT * FROM Users WHERE username = '" . $username . "' AND mdp = '" . $password . "';";  

echo $query;

$stmt = $conn->query($query);

echo $stmt;

//Vérification des données de connexion
// if ($stmt == NULL) 
// {
//     header("Location: /login.html");
//     exit;
// } 
// else 
// {
//     $_SESSION['username'] = $username;
//     header("Location: /index.php");
//     exit();
// }
?>