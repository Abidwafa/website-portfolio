<?php
require('php.php');
$fietsen = $pdo->prepare("SELECT * FROM fietsen WHERE id= :id");
$fietsen->bindParam('id', $_GET['id']);
$fietsen->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reserveren</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reserveren.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function() {
            $('#icon').click(function() {
                $('ul').toggleClass('show');
            });
        });
    </script>
</head>

<body>
    <a href="reserveer.php">
        <= terug</a>

        <div class="container">
            <div class="container1">


                <form action="" method="post">

                <div class="hoofdtitel">

                    <div class="hr">
                        <hr>
                    </div>

                    <div class="title">
                        <h2 id="titel">Fietsen reserveren</h2>
                    </div>

                    <div class="hr">
                        <hr>
                    </div>

                </div>

                        <h1><?php foreach($fietsen as $fietsen1) echo $fietsen1['soort']; ?></h1>

                <fieldset id="field">

                    <div class="naam">
                        <label id="naam" for="naam">Voornaam: *</label>
                        <input id="voornaam" type="text" name="voornaam">
                    </div>
                </fieldset>

                <br>

                <fieldset id="field">
                    <div class="achternaam">
                        <label id="achternaam" for="achternaam">Achternaam: *</label>
                        <input type="text" name="achternaam">
                    </div>
                </fieldset>

                <br>

                <fieldset id="field">
                    <div class="telefoon">
                        <label id="telefoon" for="telefoon">Telefoon nr.: *</label>
                        <input type="tel" name="telefoon">
                    </div>
                </fieldset>

                <br>

                <fieldset id="field">
                    <div class="adres">
                        <label id="adres" for="adres">Adres: *</label>
                        <input type="text" name="adres">
                    </div>
                </fieldset>

                <br>

                <fieldset id="field">
                    <div class="huisnummer_toevoeging">
                        <label id="huisnummer_toevoeging" for="huisnummer_toevoeging">Huisnummer en toevoeging: *</label>
                        <input type="text" name="huisnummer_toevoeging">
                    </div>
                </fieldset>

                <br>

                <fieldset id="field">
                    <div class="email">
                        <label id="email" for="email">Email: *</label>
                        <input type="email" name="email">
                    </div>
                </fieldset>

                <br>

                <fieldset id="field">
                    <div class="datum">
                        <label id="datum" for="datum">Datum reservering: *</label>
                        <input id="breed" type="date" name="datum">
                    </div>
                </fieldset>

                <br>

                <fieldset id="field">
                    <div class="tijd">
                        <label id="tijd" for="tijd">Wanneer wilt u<br> de fiets reserveren?: *</label>
                        <input type="time" name="tijd">
                    </div>
                </fieldset>

                <br>
                <center><input type="submit" id="button" name="button1" value="verstuur"></center>


            </form>
            </div>
        </div>


</body>

</html>