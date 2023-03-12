<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title> 
</head>
<body>
    <h1>Dates in PHP</h1>
        <?php 
            date_default_timezone_set("America/Sao_Paulo");
            echo "Today is day " . date("d/M/Y");
            echo " and the current time is: " . date("G:i:s T") . "\u{1f30E}";
        ?>
    
</body>
</html>