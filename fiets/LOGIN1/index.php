<?php
require_once('LoginController.php');
session_start();
?>

<head>
    <title>Inlog pagina</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <form action="index.php" method="post">
        <div class="hoofd">

            <div class="titel">
                <h1>Login</h1>
            </div>

            <div class="deel1">
                <label for="user">Gebruiksnaam: </label>
                <input type="text" name="user" />
            </div>

            <br>

            <div class="deel2">
                <label for="password">Wachtwoord: </label>
                <input type="password" name="password" />
            </div>
            <div class="hidden">
                <p><?php
                    if (isset($_POST['login'])) {
                        try {
                            $user = $_POST['user'];
                            $loginController = new LoginController();
                            if ($loginController->Login($user, $_POST['password'])) {
                                header('Location: ../FIETS home/website.html');
                                $_SESSION['user'] = $user;
                            } else {
                                echo 'Ongeldige "Gebruiksnaam" of "Wachtwoord"';
                                unset($_SESSION['user']);
                            }
                        } catch (Exception $ex) {
                            echo $ex->getMessage() . "<br/>";
                        }
                    }

                    ?></p>
            </div>

            <div class="deel3">
                <input id="button" type="submit" name="login" value="Login" />
            </div>
            <br>
            <div class="deel4">
                <a href="NewUser.php">Registreer</a>
            </div>

        </div>

    </form>
</body>