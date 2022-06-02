<?php
require_once('LoginController.php');
session_start();
?>


<head>
    <title>Regstreer pagina</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <form action="NewUser.php" method="post">
        <div class="hoofd">

        <div class="titel">
                <h1>Registreer</h1>
            </div>

            <div class="deel1">
                <label for="user">Gebruiksnaam: </label>
                <input type="text" name="user" />
            </div>

            <br>

            <div class="deel2">
                <label for="naam">Volledige naam: </label>
                <input type="text" name="userName" />
            </div>

            <br>

            <div class="deel3">
                <label for="email">Email: </label>
                <input type="text" name="email" />
            </div>

            <br>

            <div class="deel4">
                <label for="password">Wachtwoord: </label>
                <input type="password" name="password" />
            </div>

            <br>

            <div class="deel5">
                <label for="password1">Herhaal wachtwoord</label>
                <input type="password" name="repeatedPassword" />
            </div>

            <div class="hidden">
                <p><?php
if (isset($_POST['newUser'])) {
    try {
        $loginController = new LoginController();
        $loginController->CreateUser(
            $_POST['user'],
            $_POST['password'],
            $_POST['repeatedPassword'],
            $_POST['userName'],
            $_POST['email']
        );
        header('Location: index.php');
    } catch (Exception $ex) {
        echo $ex->getMessage() . "<br />";
    }
}
?></p>
            </div>

            <div class="deel6">
                <input id="button" type="submit" name="newUser" value="Registreer" />
            </div>

        </div>
    </form>
</body>
