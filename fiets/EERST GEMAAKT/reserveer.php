<?php

require('php.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reserveer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reserveer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="reserveer.js"></script>

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
        <label class="logo">FIETS.com</label>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">Reserveren</a></li>
            <li><a href="#">Prijzen</a></li>
            <li><a href="#">Informatie </a></li>
        </ul>

        <label id="icon">
            <i class="fa fa-bars"></i>
        </label>

    </nav>

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

                <br>

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

                <fieldset>
                    <div class="main">
                        <div class="fietsentekst">
                            <p style="text-align: center;">Welke fiets wilt u reserveren? * <br>(Voor meer info over de fietsen ga naar informatie)</p>
                        </div>

                        <br>

                        <div class="fietsen">

                            <hr>

                            <div class="fietsen20">

                                <div class="fietsen1">

                                    <hr>

                                    <div class="radio">
                                        <p>Elektrische fiets</p>
                                        <br>
                                        <img id="img" src="elektrischefietsheren1.jpg">
                                        <div class="binnen">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <p>AMIGO E-Active Dames</p>
                                        <br>
                                        <a href="fietsen.php?id=1>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                        <br>
                                    </div>

                                    <hr>

                                    <div class="radio">
                                        <p>Elektrische fiets</p>
                                        <br>
                                        <img id="img" src="elektrischefietsdames.jpg">
                                        <div class="binnen">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <p>AMIGO E-Pulse Heren</p>
                                        <br>
                                        <a href="fietsen.php?id=2>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                        <br>
                                    </div>

                                    <hr>

                                    <div class="radio">
                                        <p>Mountainbike</p>
                                        <br>
                                        <img id="img" src="mountainbike.jpg">
                                        <div class="binnen">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <p>Geroni Magnum Junior</p>
                                        <br>
                                        <a href="fietsen.php?id=3>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                        <br>
                                    </div>

                                    <hr>

                                </div>

                                <hr>

                                <div class="fietsen2">
                                    <hr>

                                    <br>

                                    <div class="radio">
                                        <p>Mountainbike</p>
                                        <br>
                                        <img id="img" src="mountainbike1.jpg">
                                        <div class="binnen">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <p>Deed Vector Pro 294</p>
                                        <br>
                                        <a href="fietsen.php?id=4>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                        <br>
                                    </div>

                                    <hr>

                                    <div class="radio">
                                        <p>BMX</p>
                                        <br>
                                        <img id="img" src="bmx.jpg">
                                        <div class="binnen">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <p>AMIGO Extreme</p>
                                        <br>
                                        <a href="fietsen.php?id=5>"><input type="button" id="button" name="button1" value="Bestellen"></a>

                                    </div>

                                    <hr>
                                    <div class="radio">
                                        <p>BMX</p>
                                        <br>
                                        <img id="img" src="bmx1.jpg">
                                        <div class="binnen">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <p>AMIGO Fly 20</p>
                                        <br>
                                        <a href="fietsen.php?id=6>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                    </div>

                                    <hr>

                                </div>

                                <hr>
                                <div class="fietsen3">
                                    <hr>

                                    <br>

                                    <div class="radio">
                                        <p>Transportfiets</p>
                                        <br>
                                        <img id="img" src="transportfiets.jpg">
                                        <div class="binnen">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <p>AMIGO Forest heren</p>
                                        <br>
                                        <a href="fietsen.php?id=7>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                        <br>
                                    </div>

                                    <hr>

                                    <div class="radio">
                                        <p>Transportfiets</p>
                                        <br>
                                        <img id="img" src="transportfiets1.jpg">
                                        <div class="binnen">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <p>AMIGO Eclypse dames</p>
                                        <br>
                                        <a href="fietsen.php?id=8>"><input type="button" id="button" name="button1" value="Bestellen"></a>

                                    </div>

                                    <hr>

                                    <div class="radio">
                                        <p>Stadfiets</p>
                                        <br>
                                        <img id="img" src="stadfiets.jpg">
                                        <div class="binnen">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <p>AMIGO Style-S2 heren</p>
                                        <br>
                                        <a href="fietsen.php?id=9>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                    </div>

                                    <hr>

                                </div>
                            </div>

                        </div>
                    </div>
                </fieldset>

            </form>

        </div>

    </div>


</body>

</html>