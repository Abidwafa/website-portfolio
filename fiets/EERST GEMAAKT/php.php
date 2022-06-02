<?php

$host = '127.0.0.1';
$db   = 'fietsen';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    if (
        isset($_POST['submit']) &&
        isset($_POST['voornaam']) &&
        isset($_POST['achternaam']) &&
        isset($_POST['telefoon']) &&
        isset($_POST['adres']) &&
        isset($_POST['huisnummer_toevoeging']) &&
        isset($_POST['email']) &&
        isset($_POST['datum']) &&
        isset($_POST['tijd'])
    ) {
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $telefoon = $_POST['telefoon'];
        $adres = $_POST['adres'];
        $huisnummer_toevoeging = $_POST['huisnummer_toevoeging'];
        $email = $_POST['email'];
        $datum = $_POST['datum'];
        $tijd = $_POST['tijd'];

        $sql = $pdo->prepare("INSERT INTO bestellen(voornaam, achternaam, telefoon, adres, huisnummer_toevoeging, email, datum, tijd) 
        VALUES(:voornaam , :achternaam , :telefoon , :adres , :huisnummer_toevoeging , :email , :datum , :tijd)");
        $sql->bindParam(':voornaam', $voornaam);
        $sql->bindParam(':achternaam', $achternaam);
        $sql->bindParam(':telefoon', $telefoon);
        $sql->bindParam(':adres', $adres);
        $sql->bindParam(':huisnummer_toevoeging', $huisnummer_toevoeging);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':datum', $datum);
        $sql->bindParam(':tijd', $tijd);
        $sql->execute();
        if ($sql) {
            echo "DATA INSERTED SUCCESFULLY";
        } else {
            echo "FAILED TO INSERT";
        }
    }
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
