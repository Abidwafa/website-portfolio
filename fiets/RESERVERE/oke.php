<?php

require('php.php');
$fietsen = $pdo->prepare("SELECT * FROM fietsen WHERE id_fiets = :id");
$fietsen->bindParam(':id', $_GET['id']);
$fietsen->execute();
if ($_GET["id"]) {
    $id = $_GET["id"];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reserveren</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="oke.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="oke.js"></script>
    
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

    <nav>
        <label class="logo">B-FIETS.com</label>
        <ul>
            <li><a href="../FIETS home/website.html">Home</a></li>
            <li><a class="active" href="../FIETS reserveer/kiezen1.php">Reserveren</a></li>
            <li><a href="../prijzen/kiezen.php">Prijzen</a></li>
            <li><a href="../FIETS informatie/website.html">Informatie </a></li>
        </ul>

        <label id="icon">
            <i class="fa fa-bars"></i>
        </label>

    </nav>

    <div class="container">

        <div class="container1">

            <form method="post">

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

                <fieldset>
                    <div class="soort">
                        <label for="soort">Soort fiets: </label>
                        <input type="text" name="soort" value="<?php foreach ($fietsen as $fietsen1) echo $fietsen1['soort']; ?>">
                    </div>
                </fieldset>

                <br>

                <fieldset>
                    <div class="type">
                        <label for="type">Type fiets: </label>
                        <input type="text" name="type" value="<?php echo $fietsen1['type']; ?>">
                    </div>
                </fieldset>

                <br>

                <fieldset>
                    <div class="voornaam">
                        <label id="voornaam" for="voornaam">Voornaam: *</label>
                        <input type="text" name="voornaam">
                    </div>
                </fieldset>

                <br>

                <fieldset>
                    <div class="achternaam">
                        <label id="achternaam" for="achternaam">Achternaam: *</label>
                        <input type="text" name="achternaam">
                    </div>
                </fieldset>

                <br>

                <fieldset>
                    <div class="telefoon">
                        <label id="telefoon" for="telefoon">Telefoon nr.: *</label>
                        <input type="tel" name="telefoon">
                    </div>
                </fieldset>

                <br>

                <fieldset>
                    <div class="adres">
                        <label id="adres" for="adres">Adres: *</label>
                        <input type="text" name="adres">
                    </div>
                </fieldset>

                <br>

                <fieldset>
                    <div class="huisnummer_toevoeging">
                        <label id="huisnummer_toevoeging" for="huisnummer_toevoeging">Huisnummer en toevoeging: *</label>
                        <input type="text" name="huisnummer_toevoeging">
                    </div>
                </fieldset>

                <br>

                <fieldset>
                    <div class="email">
                        <label id="email" for="email">Email: *</label>
                        <input type="email" name="email">
                    </div>
                </fieldset>

                <br>

                <fieldset>
                    <div class="datum">
                        <label id="datum" for="datum">Datum reservering: *</label>
                        <input id="datum" type="date" name="datum">
                    </div>
                </fieldset>

                <br>

                <fieldset>
                    <div class="tijd">
                        <label id="tijd" for="tijd">Wanneer wilt u<br> de fiets reserveren?: *</label>
                        <input type="time" name="tijd" id="tijd">
                    </div>
                </fieldset>

                <br>
                <center><input type="submit" id="button" name="button1" value="verzenden"></center>
                <input type="hidden" value="<?php echo $id ?>" name="id" id="id">

            

            </form>

            <label for="duration">Duur</label>
                     <br>
                     <select class="form-control col-2" name="duration" id="duration">
                        <option value="1">1 uur</option>
                        <option value="2">2 uur</option>
                        <option value="5">5 uur</option>
                        <option value="24">24 uur</option>
                     </select>
                     <br>
                     <label for="starttime">Begintijd</label>
                     <br>
                     <input class="form-control col-3" type="datetime-local" name="starttime" id="starttime" value="<?php
                     $curr_date = date('Y-m-d\T09:00');
                     echo date('Y-m-d\TH:i', strtotime($curr_date. '+ 1 day'));
                     ?>" min="<?php
                     $curr_date = date('Y-m-d\T09:00');
                     echo date('Y-m-d\TH:i', strtotime($curr_date. '+ 1 day'));
                     ?>" max="18:00">
                     <br>
                     <label for="endtime">Eindtijd</label>
                     <br>
                     <input class="form-control col-3" type="datetime-local" name="endtime" id="endtime" readonly>

        </div>

    </div>


</body>

</html>