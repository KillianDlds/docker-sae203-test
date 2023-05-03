<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styleRegister.css">
</head>

<body>
    <a href="./index.php"> <img src="/images/logo.svg" alt=""></a>
    <div class="form-container">
        <p class="title">Inscription</p>
        <form class="form" action="login.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="">
            </div>
            <input class="sign" type="submit" value="S'inscrire">
        </form>

        <p class="signup">Vous avez déjà un compte ?
            <a rel="noopener noreferrer" href="./login.php" class="">Se connecter</a>
        </p>
    </div>

    <?php
    // Connexion à la base de données
    $servername = "localhost";
    $username = "review_site";
    $password = "password";
    $dbname = "momentos";

    $conn = new mysql($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if (!$conn) {
        die("Connexion échouée: " . mysqli_connect_error());
    }

    // Récupération des données du formulaire
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insertion des données dans la table "users"
    $sql = "INSERT INTO Users (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Inscription réussie";
    } else {
        echo "Erreur: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>

</body>



</html>