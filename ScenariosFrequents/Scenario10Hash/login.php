<?php
// Les utilisateurs valide
$users = [
    'Bob' => '$2y$10$68P8/buJ7SlhEubyTQ4/n.o9fdmWyEw1Y0w57VGe2HneJlGblqquG',      // asdf
    'Toto' => '$2y$10$VvuCpota3bUSpAa2I2hHQ.Ipd6iHNtDxmPnvBXJWYSsCaGXGmJt5q',     // ASDF
    'Tata' => '$2y$10$IvcHA5ngeSGv86c30vIbCOoknrAawcGjGkjNRuSkhsGSjpHCKygnS',     // titi
    'Bobjunior' => '$2y$10$Z7tERO/868xXM2r1QztGfu.wQWBEY3cz/cIM84K0Yt4u57UUTi8ZO',// toto
    'Hash' => '$2y$10$exbcH4Y296Nm7M5BtyRUneEO5n8iFJfmwE9a3/H9YZ91xy5IUIDY.'      // zxczxc
];

// Connexion
session_start();
if (isset($_POST['username'], $_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (key_exists($username, $users))
    {
        $expectedPassword = $users[$username];
        if (password_verify($password, $expectedPassword))
        {
            // Est connecté! 
            // Création de la variable de session contenatn le nom d'utilisateur
            $_SESSION['username'] = $username;
            header('Location:index.php');
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scénario 10 - Connexion</title>
    </head>
    <body>
        <h1>
            POST --> SESSION --> GET: Connexion dans un système, sauvegarde 
            en session et redirection.
        </h1>
        <form method="post">
            <p>
                <label>
                    Nom d'utilisateur:
                    <input type="text" name="username">
                </label>
            </p>
            <p>
                <label>
                    Mot de passe:
                    <input type="password" name="password">
                </label>
            </p>
            <p>
                <button type="submit">Connexion</button>
            </p>
        </form>
    </body>
</html>
