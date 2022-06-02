<?php
require('php.php');
$fietsen = $pdo->prepare("SELECT * FROM fietsen WHERE id= :id");
$fietsen->bindParam('id', $_GET['id']);
$fietsen->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiets</title>
</head>

<body>
                    <div>
                        <h1><?php ?></h1>
                        <input type="text" name="soort" value="<?php
                                                                foreach ($fietsen as $fietsen1) {
                                                                    echo $fietsen1['soort'];
                                                                }
                                                                ?>">
                        <input type="text" name="type" style="width: 500px;" value="<?php echo $fietsen1['fiets']; ?>">
                    </div>

                   


</body>

</html>