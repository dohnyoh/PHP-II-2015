<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_GET['password'], $_GET['hash']))
        {
            $password = $_GET['password'];
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
//            $hash = $_GET['hash'];
//            if ($hash == '')
//            {
//                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
//            }
//            else
//            {
//                $hashedPassword = crypt($password, $hash);
//                echo '<pre>'.$hash.'</pre>';
//            }
            echo '<pre>'.$hashedPassword.'</pre>';
        }
        ?>
        <form method="get">
            Password:
            <input type="text" name="password">
            <br>
<!--
            hash:
            <input type="text" name="hash">
            <br>
-->
            <input type="submit" value="Hash!">
        </form>
    </body>
</html>
