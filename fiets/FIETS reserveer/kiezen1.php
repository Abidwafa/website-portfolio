<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fiets kiezen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kiezen1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="fietsreserveer.js"></script>

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

            <div class="hoofdtitel">
                <fieldset>
                    <div class="title">
                        <h2 id="titel">Fietsen reserveren</h2>
                    </div>
                </fieldset>
            </div>

            <div class="border">
                <div class="main">
                    <div class="fietsentekst">
                        <p style="text-align: center;">Welke fiets wilt u reserveren? * <br>(Voor meer info over de fietsen ga naar informatie)</p>
                    </div>

                    <br>

                    <div class="alles">


                        <fieldset class="p1">
                            <div class="radio">
                                <p>Elektrische fiets</p>
                                <br>
                                <img id="img" src="../FOTO'S/elektrischefietsdames.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>AMIGO E-Active Dames</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=1>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Elektrische fiets</p>
                                <br>
                                <img id="img" src="../FOTO'S/elektrischefietsheren1.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>AMIGO E-Pulse Heren</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=2>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Mountainbike</p>
                                <br>
                                <img id="img" src="../FOTO'S/mountainbike.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>Geroni Magnum Junior</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=3>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Mountainbike</p>
                                <br>
                                <img id="img" src="../FOTO'S/mountainbike1.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>Deed Vector Pro 294</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=4>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>BMX</p>
                                <br>
                                <img id="img" src="../FOTO'S/bmx.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>AMIGO Extreme</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=5>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>BMX</p>
                                <br>
                                <img id="img" src="../FOTO'S/bmx1.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>AMIGO Fly 20</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=6>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Transportfiets</p>
                                <br>
                                <img id="img" src="../FOTO'S/transportfiets.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>AMIGO Forest heren</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=7>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Transportfiets</p>
                                <br>
                                <img id="img" src="../FOTO'S/transportfiets1.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>AMIGO Eclypse dames</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=8>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Stadfiets</p>
                                <br>
                                <img id="img" src="../FOTO'S/stadfiets.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>AMIGO Style-S2 heren</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=9>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Omafiets</p>
                                <br>
                                <img id="img" src="../FOTO'S/omafiets.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>Export Dames</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=10>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Opafiets</p>
                                <br>
                                <img id="img" src="../FOTO'S/opafiets.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>Export Heren</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=11>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Kinderfiets</p>
                                <br>
                                <img id="img" src="../FOTO'S/kinderfiets.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>AMIGO Rock Junior</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=12>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Kinderfiets</p>
                                <br>
                                <img id="img" src="../FOTO'S/kinderfiets1.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>Volare Rocky</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=13>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Moederfiets</p>
                                <br>
                                <img id="img" src="../FOTO'S/moederfietsen.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>Burgers moederfiets</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=14>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Moederfiets</p>
                                <br>
                                <img id="img" src="../FOTO'S/moederfiets1.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>Burgers moederfiets</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=15>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Driewieler</p>
                                <br>
                                <img id="img" src="../FOTO'S/driewieler.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>QPlay driewieler Elite Junior black</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=16>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Driewieler</p>
                                <br>
                                <img id="img" src="../FOTO'S/driewieler1.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>QPlay driewieler Elite Junior roze</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=17>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Loopfiets</p>
                                <br>
                                <img id="img" src="../FOTO'S/loopfiets.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>Van Dijk Toys loopfiets lichtblauw</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=18>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Loopfiets</p>
                                <br>
                                <img id="img" src="../FOTO'S/loopfiets1.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>JAMARA loopfiets rood</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=19>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="p1">
                            <div class="radio">
                                <p>Elektrische akfiets</p>
                                <br>
                                <img id="img" src="../FOTO'S/bakfiets.jpg">
                                <div class="binnen">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p>Troy elektrische bakfiets</p>
                                <br>
                                <div>
                                    <a href="../RESERVERE/oke.php?id=20>"><input type="button" id="button" name="button1" value="Bestellen"></a>
                                </div>
                            </div>
                        </fieldset>

                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>


</body>

</html>